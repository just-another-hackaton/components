# Components 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jah/components.svg?style=flat-square)](https://packagist.org/packages/jah/components)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/jah/components/run-tests?label=tests)](https://github.com/jah/components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/jah/components/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/jah/components/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jah/components.svg?style=flat-square)](https://packagist.org/packages/jah/components)

# Our Laravel blade components that we use throughout our Laravel based projects. 


## Installation

You can install the package via composer:

```bash
composer require jah/components
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="components-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="components-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="components-views"
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tim Joosten ](https://github.com/just-another-hackaton)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
