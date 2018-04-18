<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = [
        'account_id', 'content', 'status', 'type'
    ];

    protected function account() {
        return $this->belongsTo('App\Model\Account', 'account_id', 'id');
    }
}
