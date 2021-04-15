<?php

namespace App\Http\Livewire\Posts;

use App\Models\Pair;
use App\Models\Post;
use Livewire\Component;
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
    public $pair_id;

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
        'pair_id' => 'required',
    ];

    public function render()
    {
        return view('livewire.posts.create-post')->with('pairs',Pair::all());
    }

    public function savePost(){
        $tag_array = explode(',',$this->tags);
        $validated_values = $this->validate();
        unset($validated_values['tags']);
        $validated_values['published_at'] = now();
        $validated_values['user_id'] = auth()->id();
        $validated_values['tags'] = $tag_array;
        $post = Post::create($validated_values);
        dd('Added Post Successfully');
    }
}
