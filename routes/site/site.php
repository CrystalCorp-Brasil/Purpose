<?php
    use App\Http\Controllers\Site\{WebController};
    use Illuminate\Support\Facades\Route;

    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('home');
    });
