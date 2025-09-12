<?php
    use App\Http\Controllers\Admin\{ProfileController,UserImagesController};
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/dashboard', 'dashboard')->name('dashboard');
            Route::get('/perfil', 'edit')->name('profile.edit');
            Route::patch('/profile/{id}', 'update')->name('profile.update');
            Route::get('/perfil/exclusao', 'delete')->name('profile.delete');
            Route::delete('/profile', 'destroy')->name('profile.destroy');
        });

        Route::controller(UserImagesController::class)->group(function () {
            Route::get('/dashboard/imagens', 'upload')->name('image.upload');
            Route::patch('/dashboard/imagens', 'store')->name('image.store');
        });
    });
