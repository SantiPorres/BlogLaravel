<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }

        $posts = Post::with(['getAuthor'])->get();
        $comments = Comments::with(['getPostComment', 'getAuthorComment'])->get();
        
        // $user_id = Post::find('user_id');
        
        // $user_name = User::where('username', $user_id);
        // dd($comments);
        return view('dashboard', compact("posts", "comments"));
    }
}