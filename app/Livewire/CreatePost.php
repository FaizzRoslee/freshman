<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use WireUi\Traits\Actions;

class CreatePost extends Component
{
    use Actions;

    public $post_type;

    public $value;
    public $trixId;
    public Post $post;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function mount($post_type){
        $this->post_type = $post_type;
        // dd($this->post_type);
    }

}
