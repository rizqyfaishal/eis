<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleCategory extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $fillable = ['name'];
    protected $with = ['articles'];

    public function articles(){
        return $this->hasMany('App\Article');
    }
}
