<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MilestoneController;
use App\Http\Controllers\TaskController;
use App\Models\User;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Milestone;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/project', [ProjectController::class, 'create']);

Route::post('/projects', [ProjectController::class, 'store']);

Route::get('/milestone', [MilestoneController::class, 'create']);

Route::post('/milestones', [MilestoneController::class, 'store']);

Route::get('/task', [TaskController::class, 'create']);

Route::post('/tasks', [TaskController::class, 'store']);

Route::get('/timeline', function () {
    return view('timeline');
});