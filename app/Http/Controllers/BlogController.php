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

    public function storeAction(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->abstract = $request->abstract;
        $blog->content = $request->content;
        $blog->img_url = $request->img_url;
        $blog->save();
        return redirect()->route('blog.index');
    }

    public function updateAction($id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        $blog->update([
            'title' => $request->title,
            'abstract' => $request->abstract,
            'content' => $request->content,
            'img_url' => $request->img_url,
        ]);
        return redirect()->route('blog.view', ['id' => $id]);
    }

    public function deleteAction($id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
