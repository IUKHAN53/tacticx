<?php

namespace App\Http\Livewire\Posts;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{
    public $post_id;
    public $post;
    public $comments;
    public $comment_text;
    public $rules = [
        'comment_text' => 'required|string',
    ];

    public function mount(){
        $this->post = Post::with('comments','tags','user')->findOrFail($this->post_id);
        $this->comments = $this->post->comments;
    }

    public function render()
    {
        return view('livewire.posts.show-post');
    }

    public function postComment(){
        $this->validate();
        $new_comment = new Comment;
        $new_comment->comment = $this->comment_text;
        $new_comment->post_id = $this->post_id;
        $new_comment->user_id = auth()->id();
        $new_comment->save();
        $this->reset('comment_text');
        $this->mount();
    }
}
