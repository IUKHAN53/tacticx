<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $type;
    public $strategy;
    public $status;
    public $timeframe;
    public $cover_photo;
    public $description;
    public $disclaimer;

    protected $rules = [
        'type' => 'required',
        'strategy' => 'required',
        'status' => 'required',
        'timeframe' => 'required',
        'cover_photo' => 'required',
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
