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

    public function editAction($id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit', [
            'blog' => $blog,
        ]);
    }

    public function storeAction($id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->abstract = $request->abstract;
        $blog->content = $request->content;
        $blog->img_url = $request->img_url;
        $blog->save();
        return redirect()->route('blog.view', ['id' => $id]);
    }
}
