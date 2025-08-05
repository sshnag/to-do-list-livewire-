<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public function delete($id){
        $user=User::find($id);
        $user->delete();
    }
    public function render()
    {
        return view('livewire.users.user-list',["users"=>User::all()]);
    }
}
