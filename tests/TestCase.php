<?php

namespace Hamza094\StorageMonitor\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Hamza094\StorageMonitor\StorageMonitorServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Hamza094\\StorageMonitor\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            StorageMonitorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_storage-monitor_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
