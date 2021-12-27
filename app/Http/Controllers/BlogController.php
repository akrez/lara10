<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function indexAction()
    {
        return view('blog.index', [
            'blogs' => Blog::get(),
        ]);
    }


    public function viewAction($id)
    {
        return view('blog.view', [
            'blog' => Blog::findOrFail($id),
        ]);
    }
}
