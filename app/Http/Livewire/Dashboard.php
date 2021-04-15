<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Dashboard extends Component
{
    public $posts;

    public function mount(){
        $this->posts = Post::all();
    }
    public function render()
    {
        return view('dashboard');
    }
}
