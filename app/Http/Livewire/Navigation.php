<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Notifications\RequestProNotification;
use Livewire\Component;

class Navigation extends Component
{
    public $requestProModal = false;

    public function render()
    {
        return view('navigation-menu');
    }

    public function requestPro()
    {
        $admins = User::role('Super Admin')->get();
        foreach ($admins as $admin){
            $admin->notify(new RequestProNotification(auth()->user()));
        }
        $this->requestProModal = true;
    }
}
