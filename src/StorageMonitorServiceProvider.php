<?php

namespace Hamza094\StorageMonitor;

use Hamza094\StorageMonitor\Commands\StorageMonitorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class StorageMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('storage-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_storage-monitor_table')
            ->hasCommand(StorageMonitorCommand::class);
    }
}
