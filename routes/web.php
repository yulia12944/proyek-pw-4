<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CPController;
use App\Http\Controllers\MemoriesController;
use App\Http\Controllers\MSController;
use App\Http\Controllers\lirik1Controller;

Route::get('/', [HomeController::class, 'index']);
Route::get('/CP', [CPController::class, 'index']);
Route::get('/Memories', [MemoriesController::class, 'index']);
Route::get('/MS', [MSController::class, 'index']);
Route::get('/lirik1', [lirik1Controller::class, 'index']);
