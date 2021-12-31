<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    public function Blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
