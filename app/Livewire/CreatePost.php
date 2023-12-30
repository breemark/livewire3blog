<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{

    public $title;
    public $content;

    public function savePost()
    {
        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        session()->flash('message', 'Post successfully created');

        return redirect()->to('/create-post');
    }


    public function render()
    {
        return view('livewire.create-post');
    }
}
