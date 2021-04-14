<?php

namespace App\Http\Livewire\Posts;

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

    protected $rules = [
        'type' => 'required',
        'strategy' => 'required',
        'status' => 'required',
        'timeframe' => 'required',
        'chart_link' => 'required',
        'image_link' => 'required',
        'description' => 'required',
        'disclaimer' => 'required',
    ];

    public function render()
    {
        return view('livewire.posts.create-post');
    }

    public function savePost(){
        $this->validate();
    }
}
