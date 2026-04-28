<?php

use App\Livewire\Advocates\AdvocateCreate;
use App\Livewire\Advocates\AdvocateEdit;
use App\Livewire\Advocates\AdvocateIndex;
use App\Livewire\Laws\LawsCreate;
use App\Livewire\Laws\LawsEdit;
use App\Livewire\Laws\LawsIndex;
use Illuminate\Support\Facades\Route;







Route::middleware(['auth'])->group(function () {
    //laws management
    Route::livewire('/laws/index', LawsIndex::class)->name('admin.laws.index');
    Route::livewire('/laws/create', LawsCreate::class)->name('admin.laws.create');
    Route::livewire('/laws/edit/{law}', LawsEdit::class)->name('admin.laws.edit');
    //advocates management
    Route::livewire('/advocates/index', AdvocateIndex::class)->name('admin.advocates.index');
    Route::livewire('/advocates/create', AdvocateCreate::class)->name('admin.advocates.create');
    Route::livewire('/advocates/edit/{advocate}', AdvocateEdit::class)->name('admin.advocates.edit');
});
