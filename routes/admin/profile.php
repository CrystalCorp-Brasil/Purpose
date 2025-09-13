<?php
    use App\Http\Controllers\Admin\{ProfileController,UserImagesController};
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/dashboard/perfil', 'dashboard')->name('dashboard');
            Route::get('/dashboard/perfil/editar', 'edit')->name('profile.edit');
            Route::patch('/dashboard/perfil/{id}', 'update')->name('profile.update');
            Route::get('/dashboard/perfil/exclusao', 'delete')->name('profile.delete');
            Route::delete('/dashboard/perfil', 'destroy')->name('profile.destroy');
        });

        Route::controller(UserImagesController::class)->group(function () {
            Route::get('/dashboard/imagens', 'upload')->name('image.upload');
            Route::patch('/dashboard/imagens', 'store')->name('image.store');
        });
    });
