
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Easily add Bugherd to an Enso website

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hellomayaagency/enso-bugherd.svg?style=flat-square)](https://packagist.org/packages/hellomayaagency/enso-bugherd)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/hellomayaagency/enso-bugherd/run-tests?label=tests)](https://github.com/hellomayaagency/enso-bugherd/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/hellomayaagency/enso-bugherd/Check%20&%20fix%20styling?label=code%20style)](https://github.com/hellomayaagency/enso-bugherd/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hellomayaagency/enso-bugherd.svg?style=flat-square)](https://packagist.org/packages/hellomayaagency/enso-bugherd)

Easily add Bugherd to an [Enso](https://enso-docs.maya.agency) website

## Installation

You can install the package via composer:

```bash
composer require hellomayaagency/enso-bugherd
```

Add this code into the `<head>` of your website:

```php
@include('enso-bugherd::head')
```

Populate the details you need in your `.env` file:

```
BUGHERD_KEY=XXXXXXXXXXXXXXX

# This is optional.
# By default it will be enabled if the site is not in production
BUGHERD_ENABLED=true
```

You can optionally publish the config file with:

```bash
php artisan vendor:publish --tag="enso-bugherd-config"
```

This is the contents of the published config file:

```php
return [

    /**
     * Whether to add the Bugherd JavaScript snippet to the page
     */
    'enabled' => env('BUGHERD_ENABLED', env('APP_ENV') !== 'production'),

    /**
     * Bugherd API key
     */
    'key' => env('BUGHERD_KEY'),

];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="enso-bugherd-views"
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/hellomayaagency/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jake Gully](https://github.com/hellomayaagency)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
