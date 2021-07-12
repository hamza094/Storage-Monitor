<?php

namespace Hamza094\StorageMonitor\Commands;

use Illuminate\Console\Command;

class StorageMonitorCommand extends Command
{
    public $signature = 'storage-monitor';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
