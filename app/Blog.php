<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function Comments()
    {
        return $this->hasMany(BlogComment::class);
    }
}
