<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }

        $posts = Post::all();
        // dd($posts);
        return view('dashboard', compact("posts"));
    }
}