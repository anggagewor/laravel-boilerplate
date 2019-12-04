<?php

Route::prefix('dashboard')->group( function () {
    Route::get('/', DashboardHandler::class)->name('dashboard.index');
});
