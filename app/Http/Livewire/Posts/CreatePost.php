<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Http\Models\Post;
use Livewire\WithFileUploads;

class CreatePost extends Component
{

    public $type;
    public $strategy;
    public $status;
    public $timeframe;
    public $chart_link;
    public $image_link;
    public $description;
    public $disclaimer;
    public $tags;

    protected $rules = [
        'type' => 'required',
        'strategy' => 'required',
        'status' => 'required',
        'timeframe' => 'required',
        'chart_link' => 'url',
        'image_link' => 'url',
        'description' => 'required',
        'disclaimer' => 'required',
        'tags' => 'required',
    ];

    public function render()
    {
        return view('livewire.posts.create-post');
    }

    public function savePost(){
        $validated_values = $this->validate();
        $validated_values['published_at'] = now();
        $validated_values['user_id'] = auth()->id();
        $post = Post::create($validated_values);
        dd($post);
    }
}
