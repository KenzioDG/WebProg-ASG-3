<?php
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index']);
