<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function editPost(Request $request){
        $post_id = $request->post_id;
        return view('edit-post', compact('post_id'));
    }
}
