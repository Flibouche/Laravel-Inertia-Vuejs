<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // sleep(2);
    return Inertia::render('Home');
})->name('home');

Route::inertia('/about', 'About', ['user' => 'Flibouche'])->name('about');