<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = ['major','batch','student_number'];

    public function user(){
        return $this->morphOne('App\User','user');
    }
}
