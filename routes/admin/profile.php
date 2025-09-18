<?php
    use App\Http\Controllers\Admin\{ProfileController,ImagesController};
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/dashboard/perfil', 'dashboard')->name('dashboard');
            Route::get('/dashboard/perfil/editar', 'edit')->name('profile.edit');
            Route::patch('/dashboard/perfil/{id}', 'update')->name('profile.update');
            Route::get('/dashboard/perfil/exclusao', 'delete')->name('profile.delete');
            Route::delete('/dashboard/perfil', 'destroy')->name('profile.destroy');
        });

        Route::controller(ImagesController::class)->group(function () {
            Route::get('/dashboard/imagens/galeria', 'index')->name('image.index');
            Route::get('/dashboard/imagens', 'create')->name('image.create');
            Route::patch('/dashboard/imagens', 'store')->name('image.store');
            Route::get('/dashboard/imagens/exclusao', 'delete')->name('image.delete');
            Route::delete('/dashboard/imagens/{id}', 'destroy')->name('image.destroy');
        });
    });
