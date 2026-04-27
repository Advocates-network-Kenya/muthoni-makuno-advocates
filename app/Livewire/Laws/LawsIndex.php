<?php

namespace App\Livewire\Laws;

use App\Models\Areaoflaw;
use Livewire\Component;
use Livewire\WithPagination;

class LawsIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.laws.laws-index');
    }

    #[\Livewire\Attributes\Computed]
    public function laws()
    {
        return Areaoflaw::query()
            ->latest()
            ->paginate(10);
    }
}
