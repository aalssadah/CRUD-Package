<?php


use Illuminate\Support\Facades\Route;
use Aalssadah\CrudGenerator\Http\Controllers\CrudController;

Route::resource('generate',CrudController::class);

