<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $fillable = ['title','snippet','body'];

    public function thumbnails(){
        return $this->morphMany('App\Attachment','attach');
    }
}
