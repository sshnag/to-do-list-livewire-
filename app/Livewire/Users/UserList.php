<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    public $search;
    #[On('user-created')]
     public function updateList($user=null){
    }
    public function update(){

    }

    #[Computed()]
    public function users(){
        return User::latest()->
        where('name','like',"%{$this->search}%")->
        paginate(5);
    }
    public function mount($search){
        $this->search= $search;
    }
    public function delete($id){
        $user=User::find($id);
        $user->delete();
    }


    public function render()
    {
        return view('livewire.users.user-list',[]);
    }
}
