<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'name', 'slug', 'image', 'created_by', 'category_id', 'short_desc', 'desc', 'type', 'status'
    ];

    public function getLinkAttribute() {
        return '/bai-viet/' . $this->attributes['slug'].'-'.$this->attributes['id'];
    }

    public function category() {
        return $this->belongsTo('App\Model\Category', 'category_id', 'id');
    }

    public function createdBy() {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
