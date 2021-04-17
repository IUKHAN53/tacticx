<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Dashboard extends Component
{
    protected $queryString = ['from'];
    public $from;
    public $posts;

    public function mount(){
        $this->posts = Post::with('comments','tags','user')->get();
    }
    public function render()
    {
        if(auth()->user()->hasRole('Super Admin') && !$this->from){
            $this->redirect(route('admin-dashboard'));
        }
        return view('dashboard');
    }

    public function postDetails(Post $post){
        if($post->type == 'Pro' && auth()->user()->status =='Basic'){
            session()->flash('flash.banner', 'Please upgrade your membership to view this post.!');
            session()->flash('flash.bannerStyle', 'danger');
        }else{
            $this->redirect(route('show-post',$post));
        }
    }
}
