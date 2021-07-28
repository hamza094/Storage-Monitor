<?php

namespace Hamza094\StorageMonitor\Tests\Feature\Controllers;

use Hamza094\StorageMonitor\Models\StorageMonitor;

use Hamza094\StorageMonitor\Tests\TestCase;

use Illuminate\Support\Facades\Route;

class StorageMonitorControllerTest extends TestCase
{
    /** @test */
    public function it_can_display_the_list_of_entries()
    {
        Route::storageMonitor('my-package-route');

        $entry = StorageMonitor::factory()->create([
          'storage_name' => 'abra ka dabra',
          'file_count' => rand(0, 10),
         ]);

        $this->get('/my-package-route')
            ->assertOk()
            ->assertSee($entry->storage_name)
            ->assertSee($entry->file_count);
    }
}
