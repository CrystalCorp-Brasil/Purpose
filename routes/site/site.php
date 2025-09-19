<?php
    use App\Http\Controllers\Site\{WebController};
    use Illuminate\Support\Facades\Route;

    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('home');
        Route::get('/editorial', 'editorial')->name('editorial');
        Route::get('/editorial/{editorial:slug}', 'editorialShow')->name('editorial.show');
        Route::get('/galeria', 'imageGallery')->name('imgGallery');
        Route::get('/termos-de-uso', 'termsOfUse')->name('termsOfUse');
        Route::get('/politica-de-privacidade', 'privacyPolicy')->name('privacyPolicy');
    });
