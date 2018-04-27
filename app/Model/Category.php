<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name', 'slug', 'image', 'parent_id', 'desc', 'type', 'status'
    ];

    public function parent() {
        return $this->belongsTo('App\Model\Category', 'parent_id', 'id');
    }
}
