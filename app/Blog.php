<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'content',
        'abstract',
        'img_url',
    ];

    public function Comments()
    {
        return $this->hasMany(BlogComment::class);
    }
}
