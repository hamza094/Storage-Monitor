<?php

namespace Hamza094\StorageMonitor\Http\Controllers;

use Hamza094\StorageMonitor\Models\StorageMonitor;

class StorageMonitorController
{
    public function index()
    {
        $entries = StorageMonitor::latest()->get();

        return view('storage-monitor::entries', compact('entries'));
    }
}
