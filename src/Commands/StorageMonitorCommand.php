<?php

namespace Hamza094\StorageMonitor\Commands;

use Hamza094\StorageMonitor\Models\StorageMonitor;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Storage;

class StorageMonitorCommand extends Command
{
    public $signature = 'storage-monitor:record-metrics';

    public $description = 'Record the metrics of the storage';

    public function handle()
    {
        collect(config('storage-monitor.storage_names'))
            ->each(fn (string $storageName) => $this->recordMetrics($storageName));

        $this->comment('All done!');
    }

    protected function recordMetrics(string $storageName): void
    {
        $this->info("Recording metrics for storage `{$storageName}`...");

        $file = Storage::disk($storageName);

        $fileCount = count($file->allFiles());

        StorageMonitor::create([
         'storage_name' => $storageName,
         'file_count' => $fileCount,
        ]);
    }
}
