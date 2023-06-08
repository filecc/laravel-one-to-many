<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectsController;
use App\Models\Project;

Route::get('/', function () {
    $projects = Project::paginate(5);
    return view('home', compact('projects'));
});

Auth::routes();
Route::resource('projects', ProjectsController::class);
Route::resource('admin', DashboardController::class);


