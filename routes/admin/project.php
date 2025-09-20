<?php
    use App\Http\Controllers\Admin\ProjectController;
    use Illuminate\Support\Facades\Route;

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::controller(ProjectController::class)->group(function () {
            Route::get('/dashboard/projetos', 'index')->name('project.index');
            Route::get('/dashboard/projeto', 'create')->name('project.create');
            Route::patch('/dashboard/projeto', 'store')->name('project.store');
            Route::get('/dashboard/projeto/exclusao', 'delete')->name('project.delete');
            Route::delete('/dashboard/projeto/{id}', 'destroy')->name('project.destroy');
        });
    });
