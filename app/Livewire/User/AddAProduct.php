<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\AddProduct;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AddAProduct extends Component
{
    use WithFileUploads;

    public $photos = [];

    public function add()
    {
        $this->validate([
            'photos.*' => 'image|max:1024', // Adjust validation as needed
        ]);

        $photoPaths = [];

        foreach ($this->photos as $photo) {
            $photoPath = $photo->store('addproduct', 'public');
            $photoPaths[] = $photoPath;
        }
        $user = Auth::user();

        // Save to database
        $result = AddProduct::create([
            'user_id' => $user->id,
            'photos' => json_encode($photoPaths),
        ]);

        if ($result) {

            session()->flash('success', 'Product added successfully!');
            $this->reset();
            $this->reset();
            return redirect('/users/add-product')->with('wire:navigate', true);
        }

        $this->reset();
        session()->flash('error', 'An error occurred please try again');
        return redirect('/users/add-product');
    }
    public function render()
    {
        return view('livewire.user.add-a-product');
    }
}
