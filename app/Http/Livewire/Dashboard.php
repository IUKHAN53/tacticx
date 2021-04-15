<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Dashboard extends Component
{
    public $posts;

    public function mount(){
        $this->posts = Post::with('comments','tags','user')->get();
    }
    public function render()
    {
        return view('dashboard');
    }

    public function postDetails($post){
        $this->redirect(route('show-post',$post));
    }
}