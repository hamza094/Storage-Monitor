<?php

namespace Hamza094\StorageMonitor\routes;

use Hamza094\StorageMonitor\Http\Controllers\StorageMonitorController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::macro('storageMonitor',function(string $prefix){
 Route::prefix($prefix)->group(function(){
  Route::get('/', [StorageMonitorController::class,'index']);
});
});
