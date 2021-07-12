# Storage-Monitor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hamza094/storage-monitor.svg?style=flat-square)](https://packagist.org/packages/hamza094/storage-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/hamza094/storage-monitor/run-tests?label=tests)](https://github.com/hamza094/storage-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/hamza094/storage-monitor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/hamza094/storage-monitor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/hamza094/storage-monitor.svg?style=flat-square)](https://packagist.org/packages/hamza094/storage-monitor)

## Description
Package For Monitor Your Storage In Laravel Application

## Support us

We invest a lot of resources into creating. You can support us.We highly appreciate you.

## Installation

You can install the package via composer:

```bash
composer require hamza094/storage-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Hamza094\StorageMonitor\StorageMonitorServiceProvider" --tag="storage-monitor-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Hamza094\StorageMonitor\StorageMonitorServiceProvider" --tag="storage-monitor-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$storage-monitor = new Hamza094\StorageMonitor();
echo $storage-monitor->echoPhrase('Hello, Monitor!');
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

- [Hamza](https://github.com/hamza094)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
