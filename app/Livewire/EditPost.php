<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use WireUi\Traits\Actions;

class EditPost extends Component
{
    use Actions;

    public $value;
    public $trixId;
    public $post;

    public $trixIinput;
    public $description;
    public $title;

    public function render()
    {
        return view('livewire.edit-post');
    }

    public function mount($post_id){
        // $post = Post::where('id', '=', $post_id);
        $this->post = Post::find($post_id);
        $this->trixIinput = $this->post->post;

        $this->value = $this->post->post;
        $this->trixId = 'trix-' . uniqid();

        $this->description = $this->post->description;
        $this->title = $this->post->title;
        // dd($post);

    }

    public function save(){

        $this->post->title = $this->title;
        $this->post->description = $this->description;
        $this->post->post = $this->trixIinput;

        $this->post->save();

        $this->notification()->send([
            'title'       => 'Profile saved!',
            'description' => 'Your profile was successfully saved',
            'icon'        => 'success'
        ]);

        // dd($this->trixIinput);
    }


}
