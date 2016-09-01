<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = [
        'address1',
        'address2','city','postal_code',
        'description'
    ];


    public function user(){
        return $this->morphOne('App\User','user');
    }

}
