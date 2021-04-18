<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Dashboard extends Component
{
    protected $queryString = ['from','q'];
    public $from;
    public $q;
    public $posts;
    public $tab='Active';

    public function mount(){
        if(isset($this->q)){
            request()->flash();
            $this->posts = Post::search($this->q)->active()->with('comments','tags','user')->get();
        }else{
            $this->posts = Post::active()->with('comments','tags','user')->get();
        }
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

    public function setTab($tabName){
        $this->tab = $tabName;
        if(isset($this->q)){
            if($tabName=='Active'){
                $this->posts = Post::search($this->q)->active()->with('comments','tags','user')->get();
            }elseif($tabName=='Closed'){
                $this->posts = Post::search($this->q)->closed()->with('comments','tags','user')->get();
            }elseif($tabName=='Cancelled'){
                $this->posts = Post::search($this->q)->cancelled()->with('comments','tags','user')->get();
            }
        }else{
            if($tabName=='Active'){
                $this->posts = Post::active()->with('comments','tags','user')->get();
            }elseif($tabName=='Closed'){
                $this->posts = Post::closed()->with('comments','tags','user')->get();
            }elseif($tabName=='Cancelled'){
                $this->posts = Post::cancelled()->with('comments','tags','user')->get();
            }
        }

    }
}
