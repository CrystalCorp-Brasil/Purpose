<?php
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {return view('welcome');});

    Route::get('/dashboard', function () {return view('admin/profile/index');})->middleware(['auth', 'verified'])->name('dashboard');

    require __DIR__.'/admin/profile.php';
    require __DIR__.'/auth/auth.php';
    require __DIR__.'/site/site.php';
