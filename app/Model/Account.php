<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Account extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'username', 'phone', 'type', 'status', 'facebook_id', 'google_id', 'avatar', 'link_profile', 'cash', 'xu'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
