<?php

use App\Models\ProjectLeader;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
    //redirect to project_leader
    return Redirect::to('project_leader');
});

//resource project_leader
Route::resource('project_leader', App\Http\Controllers\ProjectLeaderController::class);
Route::resource('project_monitoring', App\Http\Controllers\ProjectMonitoringController::class);
