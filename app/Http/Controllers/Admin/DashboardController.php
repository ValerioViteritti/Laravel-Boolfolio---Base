<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class DashboardController extends Controller
{
    public function index(){

        $count_post = Post::count();
        
        return view('admin.index', compact('count_post'));
    }
}
