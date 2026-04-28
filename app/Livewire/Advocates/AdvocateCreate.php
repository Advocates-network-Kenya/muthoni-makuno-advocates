<?php

namespace App\Livewire\Advocates;

use App\Models\Advocate;
use Flux\Flux;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdvocateCreate extends Component
{
    use WithFileUploads;

    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $role = '';
    public string $qualifications = '';
    public string $content = '';
    public $image;

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:advocates,email',
            'phone' => 'required|string|max:20',
            'role' => 'required|string',
            'qualifications' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $this->image->store('advocates', 'public');

        Advocate::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'role' => $validated['role'],
            'qualifications' => $validated['qualifications'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'slug' => Str::slug($validated['name']),
            'user_id' => Auth::id(),
        ]);

        Flux::toast(variant: 'success', text: __('Advocate created successfully.'));

        return $this->redirectRoute('admin.advocates.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.advocates.advocate-create');
    }
}
