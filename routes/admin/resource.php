<?php
    use App\Http\Controllers\Admin\ResourceController;
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(ResourceController::class)->group(function () {
            Route::get('/dashboard/fontes', 'index')->name('resource.index');
            Route::get('/dashboard/fonte', 'create')->name('resource.create');
            Route::patch('/dashboard/fonte', 'store')->name('resource.store');
        });
    });
