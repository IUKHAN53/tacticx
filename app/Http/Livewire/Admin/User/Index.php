<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $users;
    public function mount(){
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.admin.user.index');
    }
    public function destroy(User $user){
        $user->delete();
        $this->mount();
    }

}
