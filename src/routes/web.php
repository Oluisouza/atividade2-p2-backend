<?php

use App\Http\Controllers\IdeaController;

Route::get('/', [IdeaController::class, 'index'])->name('idea.index');

Route::post('/ideas', [IdeaController::class, 'store'])->name('idea.store');