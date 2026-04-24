<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::view('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');        
        // Areas of Law Routes
        Route::livewire('areas-of-law', 'pages.areas-of-law.index')->name('areas-of-law.index');
        Route::livewire('areas-of-law/create', 'pages.areas-of-law.edit')->name('areas-of-law.create');
        Route::livewire('areas-of-law/{areaOfLaw}/edit', 'pages.areas-of-law.edit')->name('areas-of-law.edit');
    });

Route::middleware(['auth'])->group(function () {
    Route::livewire('invitations/{invitation}/accept', 'pages::teams.accept-invitation')->name('invitations.accept');
});

require __DIR__.'/settings.php';
