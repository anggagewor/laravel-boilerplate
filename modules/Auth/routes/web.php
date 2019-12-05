<?php

Route::prefix('auth')->group( function () {
    Route::get('/login', LoginHandler::class)->name('auth.login');
    Route::post('/login', LoginRequestHandler::class)->name('auth.post.login');
    Route::get('/register', RegisterHandler::class)->name('auth.register');
    Route::post('/register', RegisterRequestHandler::class)->name('auth.post.register');
    Route::post('/logout', LogoutHandler::class)->name('auth.logout');
});
