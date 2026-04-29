<?php

declare(strict_types=1);

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
/* group other routes */

Route::prefix('mmkadvocates')->group(function () {
    Route::get('about-us', [FrontendController::class, 'aboutus'])->name('aboutus');
    Route::get('practice-areas', [FrontendController::class, 'practiceareas'])->name('practiceareas');
    Route::get('our-team', [FrontendController::class, 'ourteam'])->name('ourteam');
    Route::get('contact-us', [FrontendController::class, 'contact'])->name('contact');
    Route::get('consultation', [FrontendController::class, 'consultation'])->name('consultation');
    Route::get('appointment', [FrontendController::class, 'appointment'])->name('appointment');
    Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
});
