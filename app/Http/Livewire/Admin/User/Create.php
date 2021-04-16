<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    protected $queryString = ['user_id'];
    public $user_id;
    public $name;
    public $email;
    public $password;
    public $role;
    public $status;
    public $password_confirmation;
    public $editing = false;
    public $edit_user;

    protected $rules = [
        'name' => 'required|string',
        'role' => 'required',
        'password' => 'required|confirmed',
        'status' => 'required',
    ];

    public function mount()
    {
        if ($this->user_id) {
            $this->edit_user = User::findOrFail($this->user_id);
            $this->name = $this->edit_user->name;
            $this->email = $this->edit_user->email;
            $this->role = $this->edit_user->roles->first()->name;
            $this->status = $this->edit_user->status;
            $this->editing = true;
        }
    }

    public function render()
    {
        return view('livewire.admin.user.create');
    }

    public function addUser()
    {
        if ($this->editing) {
            $this->rules['email'] = 'required|email|unique:users,email,' . $this->edit_user->id;
            $this->validate();
            $user = $this->edit_user;
        } else {
            $this->rules['email'] = 'required|email|unique:users,email';
            $this->validate();
            $user = new User();
        }
        $user->name = $this->name;
        $user->email = $this->email;
        $user->syncRoles($this->role);
        $user->status = $this->status;
        $user->password = bcrypt($this->password);
        $user->save();
        $this->redirect(route('admin-dashboard'));
    }
}
