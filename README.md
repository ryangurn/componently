# Componently 

componently is a predefined set of components that can be used in any laravel application to save some time and effort. The main goal is standardization with flexibility.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangurn/componently.svg?style=flat-square)](https://packagist.org/packages/ryangurn/componently)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangurn/componently/run-tests?label=tests)](https://github.com/ryangurn/componently/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangurn/componently/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangurn/componently/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangurn/componently.svg?style=flat-square)](https://packagist.org/packages/ryangurn/componently)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ryangurn/componently
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="componently-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="componently-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="componently-views"
```

## Usage

```php
$componently = new Ryangurn\Componently();
echo $componently->echoPhrase('Hello, Ryangurn!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Gurnick](https://github.com/ryangurn)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
