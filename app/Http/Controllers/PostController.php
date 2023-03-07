<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store (Request $request) {
        if ($request->user()) {
            $user_id = $request->user()->id;
        } else {
            $user_id = null;
        }

        Post::create([
            'title' => $request->input('title'),
            'text_post' => $request->input('text_post'),
            'user_id' => $user_id
        ]);

        return redirect('/createThread')->with('message', '¡Hilo publicado exitosamente!');
    }

}
