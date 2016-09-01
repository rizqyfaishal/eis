<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $fillable = ['title','snippet','body','article_category_id'];
    protected $with = ['thumbnail'];


    public function thumbnail(){
        return $this->morphOne('App\Attachment','attach');
    }

    public function category(){
        return $this->belongsTo('App\ArticleCategory','article_category_id');
    }
}
