<?php

use App\Http\Controllers\Admin\Preview\Posts\PreviewController;
use Illuminate\Support\Facades\Route;

Route::get('/preview/{post:slug}', PreviewController::class)
    ->name('preview');
