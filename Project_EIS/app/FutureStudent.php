<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FutureStudent extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = ['school','student_number'];

    public function user(){
        return $this->morphOne('App\User','user');
    }
}
