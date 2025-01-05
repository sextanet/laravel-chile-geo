# Collection of chilean Regions with Communes

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sextanet/laravel-chile-geo.svg?style=flat-square)](https://packagist.org/packages/sextanet/laravel-chile-geo)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sextanet/laravel-chile-geo/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sextanet/laravel-chile-geo/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sextanet/laravel-chile-geo/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sextanet/laravel-chile-geo/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sextanet/laravel-chile-geo.svg?style=flat-square)](https://packagist.org/packages/sextanet/laravel-chile-geo)

> [!NOTE]
> Still in development. It can be unstable or change in any moment.

## Installation

You can install the package via composer:

```bash
composer require sextanet/laravel-chile-geo
```

## Database structure

You need to have `countries`, `regions` and `communes` tables.

## Seeding the database

Execute the command

```bash
php artisan chile-geo:seed
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-chile-geo-config"
```

This is the contents of the published config file:

```php
return [
    'table_countries' => env('CHILE_GEO_TABLE_COUNTRIES', 'countries'),

    'table_regions' => env('CHILE_GEO_TABLE_REGIONS', 'regions'),

    'table_communes' => env('CHILE_GEO_TABLE_COMMUNES', 'communes'),
];
```

> If you don't have a Chile country, ChileGeo it will create it.

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

- [SextaNet](https://github.com/sextanet)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
