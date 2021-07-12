<?php

namespace Hamza094\StorageMonitor\Tests\Feature\Commands;

use Illuminate\Support\Facades\Storage;
use Hamza094\StorageMonitor\Commands\StorageMonitorCommand;
use Hamza094\StorageMonitor\Models\StorageMonitor;
use Hamza094\StorageMonitor\Tests\TestCase;


class StorageMonitorCommandTest extends TestCase
{
   public function setUp(): void
    {
        parent::setUp();

        Storage::fake('local');
        Storage::fake('anotherDisk');
    }

     /** @test */
    public function it_will_record_the_file_count_for_a_single_disk()
    {
        $this->artisan(StorageMonitorCommand::class)->assertExitCode(0);

        $entry = StorageMonitor::last();
        $this->assertEquals(0, $entry->file_count);

        Storage::disk($entry->disk_name)->put('test.txt', 'text');
        $this->artisan(StorageMonitorCommand::class)->assertExitCode(0);
        $entry = StorageMonitor::last();
        $this->assertEquals(1, $entry->file_count);
    }

     /** @test */
    public function it_will_record_the_file_count_for_multiple_disks()
    {
        config()->set('storage-monitor.storage_names', ['local', 'anotherDisk']);
        Storage::disk('anotherDisk')->put('test.txt', 'text');

        $this->artisan(StorageMonitorCommand::class)->assertExitCode(0);

        $entries = StorageMonitor::get();
        $this->assertCount(2, $entries);

        $this->assertEquals('local', $entries[0]->storage_name);
        $this->assertEquals(0, $entries[0]->file_count);

        $this->assertEquals('anotherDisk', $entries[1]->storage_name);
        $this->assertEquals(1, $entries[1]->file_count);
    }

}
