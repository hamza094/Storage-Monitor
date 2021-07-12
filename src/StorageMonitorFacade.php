<?php

namespace Hamza094\StorageMonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hamza094\StorageMonitor\StorageMonitor
 */
class StorageMonitorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'storage-monitor';
    }
}
