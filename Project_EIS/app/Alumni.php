<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumni extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = ['major','batch'];

    public function user(){
        return $this->morphOne('App\User','user');
    }


}
