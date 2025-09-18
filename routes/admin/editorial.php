<?php
    use App\Http\Controllers\Admin\EditorialController;
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(EditorialController::class)->group(function () {
            Route::get('/dashboard/editoriais', 'index')->name('editorial.index');
            Route::get('/dashboard/editorial', 'create')->name('editorial.create');
            Route::patch('/dashboard/editorial', 'store')->name('editorial.store');
            Route::get('/dashboard/editorial/exclusao', 'delete')->name('editorial.delete');
            Route::delete('/dashboard/editorial/{id}', 'destroy')->name('editorial.destroy');
        });
    });
