<?php

use App\Livewire\Laws\LawsCreate;
use App\Livewire\Laws\LawsEdit;
use App\Livewire\Laws\LawsIndex;
use Illuminate\Support\Facades\Route;







Route::middleware(['auth'])->group(function () {
    //laws management
    Route::livewire('/laws/index', LawsIndex::class)->name('admin.laws.index');
    Route::livewire('/laws/create', LawsCreate::class)->name('admin.laws.create');
    Route::livewire('/laws/edit/{law}', LawsEdit::class)->name('admin.laws.edit');
});