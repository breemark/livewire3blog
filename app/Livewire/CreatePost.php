<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreatePost extends Component
{

    #[Rule('required')]
    #[Rule('min:3')]
    public $title;

    #[Rule('required')]
    #[Rule('min:5')]
    public $content;

    public function savePost()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

        session()->flash('message', 'Post successfully created');

        return redirect()->to('/create-post');
    }

    #[Title(('Create Post'))] 
    public function render()
    {
        return view('livewire.create-post');
    }
}
