<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $posts;

    public function render()
    {
        $this->posts = Post::with('comments','tags','user')->get();
        return view('livewire.admin.post.index');
    }
}
