<?php

namespace Hamza094\StorageMonitor\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class StorageMonitor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $casts = [
        'file_count' => 'integer',
    ];

    public static function last(): ?self
    {
        return static::orderByDesc('id')->first();
    }
}
