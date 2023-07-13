# Contributing Guidelines

Thank you for your interest in contributing to our project! From commenting on and triaging issues, to reviewing and sending Pull Requests, all contributions are welcome. We aim to build a welcoming and respectful community and we ask that you adhere to the [Code of Conduct](./CODE_OF_CONDUCT.md) in all interactions.

# Setup

Make sure you have PHP 8.2 installed.

# Development

After checking out the repo, run `composer install` to install dependencies. Then, run `composer test` to run the tests.

# Contributing

1. Fork it (https://github.com/Peaky-Blind3rs/ip-address-interface)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

# Pull Request Guidelines

Before sending a Pull Request, please make sure that you've discussed the changes that you propose with the maintainers. Also ensure that:

- Existing tests pass with `phpunit`.
- Your code lints (`composer cs-check`).
- Static analysis (`composer static-analysis`).
- New and changed code is covered by tests.
- New functions and methods have appropriate comments.
- Changes are summarized in the changelog.

Your Pull Request will be reviewed by one of the project maintainers. The decision to merge a PR is ultimately made by the maintainers.

# Code of Conduct

Please note that this project is released with a [Contributor Code of Conduct](./CODE_OF_CONDUCT.md). By participating in this project you agree to abide by its terms.