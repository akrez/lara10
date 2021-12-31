<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogComment;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
    public function storeAction($blog_id, Request $request)
    {
        $blog = Blog::findOrFail($blog_id);

        $blogComment = new BlogComment();
        $blogComment->email = $request->email;
        $blogComment->comment = $request->comment;
        $blogComment->blog_id = $blog_id;
        $blogComment->save();

        return redirect()->route('blog.view', ['id' => $blog_id]);
    }
}
