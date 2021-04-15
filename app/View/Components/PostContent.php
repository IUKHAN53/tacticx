<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostContent extends Component
{
    public $post;
    public $comments;

    public function __construct($post,$comments)
    {
        $this->post = $post;
        $this->comments = $comments;
    }

    public function render()
    {
        return view('components.post-content');
    }
}
