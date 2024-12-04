<?php

namespace App\Livewire\Admin;

use App\Models\User; // Import the User model
use Livewire\Component;

class DeleteUser extends Component
{
    public $userId;

    // Method to delete the user
    public function deleteUser()
    {
        // Fetch the user by ID and delete
        $user = User::find($this->userId);
        if ($user) {
            $user->delete();

            session()->flash('success', 'User Deleted Successfully');
            return redirect()->route('admin_dashboard');
        } else {
            // Emit an error event if user not found (optional)
            session()->flash('error', 'User not found');
            return redirect()->route('admin_dashboard');
        }
    }

    public function render()
    {
        return view('livewire.admin.delete-user');
    }
}
