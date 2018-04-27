<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'name', 'slug', 'image', 'created_by', 'category_id', 'short_desc', 'desc', 'type', 'status'
    ];
}
