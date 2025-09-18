<?php
    use App\Http\Controllers\Admin\IconController;
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(IconController::class)->group(function () {
            Route::get('/dashboard/icones', 'index')->name('resource.index');
            Route::get('/dashboard/icone', 'create')->name('resource.create');
            Route::patch('/dashboard/icone', 'store')->name('resource.store');
        });
    });
