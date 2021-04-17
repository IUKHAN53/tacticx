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
        if(auth()->user()->hasRole('Super Admin')){
            $this->redirect(route('admin-dashboard'));
        }
        return view('dashboard');
    }

    public function postDetails(Post $post){
        if($post->type == 'Pro' && auth()->user()->status =='Basic'){

        }else{
            $this->redirect(route('show-post',$post));
        }
    }
}
