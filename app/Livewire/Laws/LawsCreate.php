<?php

namespace App\Livewire\Laws;

use App\Models\Areaoflaw;
use Flux\Flux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class LawsCreate extends Component
{
    use WithFileUploads;

    public string $title = '';
    public string $description = '';
    public $image;
    public string $content = '';

    
    public function save()
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('laws', 'public');
        }

       // create new area of law
        Areaoflaw::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'user_id' => Auth::id(),
            'slug' => Str::slug($validated['title']),
        ]);

        Flux::toast(variant: 'success', text: __('Area of law created successfully.'));

        return $this->redirectRoute('admin.laws.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.laws.laws-create');
    }
}
