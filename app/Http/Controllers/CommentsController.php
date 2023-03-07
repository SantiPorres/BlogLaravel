<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;

class CommentsController extends Controller
{
    public function store (Request $request) {
            
        

        if ($request->user()) {
            $user_id = $request->user()->id;
        } else {
            $user_id = null;
        }
       
        Comments::create([
            'post_id' => $request->post_id,
            'answer' => $request->answer,
            'user_id' => $user_id,
        ]);

        return redirect('/createThread')->with('message', '¡Hilo publicado exitosamente!');
    }
}
