<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','fname','lname','phone'
    ];

    protected $with = ['user','avatar'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user(){
        return $this->morphTo('user');
    }

    public function isAdmin(){
        return $this->user_type == 'App\Admin';
    }

    public function asks(){
        return $this->hasMany('App\Ask');
    }

    public function avatar(){
        return $this->morphOne('App\Attachment','attach');
    }
}
