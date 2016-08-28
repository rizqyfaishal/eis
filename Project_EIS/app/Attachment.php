<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $fillable = ['filename','extension','mime_type','size'];

    public function attach(){
        return $this->morphTo('attach');
    }
}
