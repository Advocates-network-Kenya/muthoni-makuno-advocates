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
    Route::get('practice-area/{slug}', [FrontendController::class, 'practiceareadetails'])->name('practicearea.details');
    // team details
    Route::get('team/{slug}', [FrontendController::class, 'teamdetails'])->name('team.details');
    // blog
    Route::get('blogs/', [FrontendController::class, 'blogs'])->name('blogs');
    // case studies
    Route::get('case-studies/', [FrontendController::class, 'casestudies'])->name('case-studies');

});
