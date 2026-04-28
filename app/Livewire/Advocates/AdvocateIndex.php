<?php

namespace App\Livewire\Advocates;

use App\Models\Advocate;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class AdvocateIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.advocates.advocate-index');
    }

    #[Computed]
    public function advocates()
    {
        return Advocate::latest()->paginate(10);
    }
}
