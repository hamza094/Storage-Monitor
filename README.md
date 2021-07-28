# Monitor metrics of Laravel storage

[![Latest Stable Version](http://poser.pugx.org/hamza094/storage-monitor/v)](https://packagist.org/packages/hamza094/storage-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/hamza094/storage-monitor/run-tests?label=tests)](https://github.com/hamza094/storage-monitor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/hamza094/storage-monitor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/hamza094/storage-monitor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](http://poser.pugx.org/hamza094/storage-monitor/downloads)](https://packagist.org/packages/hamza094/storage-monitor)

## Description
laravel-storage-monitor can monitor the usage of the filesystems configured in Laravel. Currently only the amount of files a local storage contains is monitored.

## Support us

We invest a lot of resources into creating. You can support us.We highly appreciate you.

## Installation

You can install the package via composer:

```bash
composer require hamza094/storage-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Hamza094\StorageMonitor\StorageMonitorServiceProvider" --tag="storage_monitors-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Hamza094\StorageMonitor\StorageMonitorServiceProvider" --tag="storage-monitor-config"
```

You can publish the view file with:
```bash
php artisan vendor:publish --provider="Hamza094\StorageMonitor\StorageMonitorServiceProvider" --tag="storage-monitor-views"
```

This is the contents of the published config file:

```php
return [
	/**
	 * the names of the storage disk you want to monitor
	 */
  'storage_names'=> [
  	'local'
  ],
];
```
Finally, you should schedule the use Hamza094\StorageMonitor\Commands\StorageMonitorCommand
 to run daily.

```php
// in app/Console/Kernel.php

use \Hamza094\StorageMonitor\Commands\StorageMonitorCommand;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule)
    {
       // ...
        $schedule->command(StorageMonitorCommand::class)->daily();
    }
}
```

## Usage

You can view the amount of files each monitored disk has, in the storage_monitors table.

If you want to view the statistics in the browser add this macro to your routes file.

```php
// in a routes files

Route::storageMonitor('storage-monitor-url');
```
Now, you can see all statics when browsing /storage-monitor-url. Of course, you can use any url you want when using the diskMonitor route macro. We highly recommand using the auth middleware for this route, so guests can't see any data regarding your disks.

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
