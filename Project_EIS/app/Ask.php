<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ask extends Model
{
    protected $fillable = ['ask_primary','ask_content'];
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $with = ['ask'];

    public function ask(){
        return $this->hasMany('App\Ask','ask_reply_id');
    }

}
