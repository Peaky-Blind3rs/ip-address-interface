## IP Address Interface Library for PHP

This library offers a standard interface to implement IP Geolocation and Threat Intelligence API in your PHP projects. It offers developers a way to craft various IP data adapter classes for their unique project requirements.

[![Packagist](https://img.shields.io/packagist/v/peaky-blind3rs/ip-address-interface.svg)](https://packagist.org/packages/peaky-blind3rs/ip-address-interface)
[![Latest Stable Version](https://poser.pugx.org/peaky-blind3rs/ip-address-interface/v)](https://packagist.org/packages/peaky-blind3rs/ip-address-interface)
[![Total Downloads](https://img.shields.io/packagist/dt/peaky-blind3rs/ip-address-interface.svg?style=flat-square)](https://packagist.org/packages/peaky-blind3rs/ip-address-interface)
[![Build Status](https://github.com/peaky-blind3rs/ip-address-interface/actions/workflows/main.yml/badge.svg)](https://github.com/peaky-blind3rs/ip-address-interface/actions)
[![codecov](https://codecov.io/gh/Peaky-Blind3rs/ip-address-interface/branch/main/graph/badge.svg?token=ASNAX7ED01)](https://codecov.io/gh/Peaky-Blind3rs/ip-address-interface)
![Type Coverage](https://shepherd.dev/github/Peaky-Blind3rs/ip-address-interface/coverage.svg)
[![Psalm level](https://shepherd.dev/github/Peaky-Blind3rs/ip-address-interface/level.svg?)](https://psalm.dev/)
[![PSR-12](https://img.shields.io/badge/code%20style-PSR--12-brightgreen)](https://www.php-fig.org/psr/psr-12/)
![PHP Version](https://img.shields.io/badge/php-%3E%3D8.2.7-blue)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

### Requirements

- PHP 8.2.7 or higher
- psr/http-message 2.0 or higher

### Installation

The package can be installed via [Composer](https://getcomposer.org/). Run the following command:

```bash
composer require peaky-blind3rs/ip-address-interface
```

### Usage

Using [IPInfo Adapter](https://ipinfo.io)

```php
use PeakyBlind3rs\IpAddressInterface\Interface\Model\IpAddressInterface;
use PeakyBlind3rs\IpAddressInterface\IPServiceFactory;

$instance = IPServiceFactory::getInstance('ipinfo://nobody:your-api-token@ipinfo.io/?timeout=30');

$result = $instance->lookup('27.126.160.0');

if ($result instanceof IpAddressInterface) {
    // Request was successful, use getter methods to get data
} else {
    // Requested Ended in Error and $result hold instance of \Psr\Http\Message\ResponseInterface
}
```
Or if you want to use [IPData Adapter](https://ipdata.co)

```php
use PeakyBlind3rs\IpAddressInterface\Interface\Model\IpAddressInterface;
use PeakyBlind3rs\IpAddressInterface\IPServiceFactory;

$instance = IPServiceFactory::getInstance('ipdata://nobody:your-api-key@ipdata.co/?timeout=30');

$result = $instance->lookup('27.126.160.0');

if ($result instanceof IpAddressInterface) {
    // Request was successful, use getter methods to get data
} else {
    // Requested Ended in Error and $result hold instance of \Psr\Http\Message\ResponseInterface
}
```
If you want to use your own adapter, your adapter needs to implement `\PeakyBlind3rs\IpAddressInterface\Interface\IpLookupInterface`

```php
namespace MyNamespace;

class MyAdapter implements \PeakyBlind3rs\IpAddressInterface\Interface\IpLookupInterface {

}

```
And then add your adapter to class map and use it

```php
use MyNamespace\MyAdapter;
use PeakyBlind3rs\IpAddressInterface\IPServiceFactory;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\IpAddressInterface;

IPServiceFactory::classMaps([
    'myadapter' => MyAdapter::class
]);

$instance = IPServiceFactory::getInstance('myadapter://nobody:your-api-key@myadapter-api.tld/?timeout=30');

$result = $instance->lookup('27.126.160.0');

if ($result instanceof IpAddressInterface) {
    // Request was successful, use getter methods to get data
} else {
    // Requested Ended in Error and $result hold instance of \Psr\Http\Message\ResponseInterface
}
```

### Testing

To run the tests, execute: 

```bash
composer test
```

### Coding Standards

Check your code for PSR compliance: 

```bash
composer cs-check
```

### Static Analysis

Analyze your code statically: 

```bash
composer static-analysis
```

### License

This project is licensed under the MIT License. Refer to the [LICENSE.md](LICENSE.md) file for further details.

### Contributing

Please consult the [CONTRIBUTING.md](CONTRIBUTING.md) file for more information.

### Acknowledgements

- Thanks to the PHP community for providing the language we cherish.
- Thanks to [Composer](https://getcomposer.org/) for handling the package dependencies effectively.

### Contact

- Have any issues? Report them via the project issue tracker.
- Got some enhancements in mind? Feel free to create a pull request or open an issue.

Happy coding!