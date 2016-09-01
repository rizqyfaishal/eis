<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ask extends Model
{
    protected $fillable = ['ask_subject','ask_content'];
    use SoftDeletes;
    protected $dates = ['delete_at'];

    protected $with = ['reply','author'];

    public function reply(){
        return $this->hasMany('App\Ask','ask_reply_id')->orderBy('id','DESC');
    }

    public function parent(){
        return $this->belongsTo('App\Ask','ask_reply_id');
    }

    public function getCreatedAtAttribute($val){
        return Carbon::parse($val)->diffForHumans();
    }

    public function category(){
        return $this->belongsToMany('App\AskCategory','asks_asks_categories_pivot','ask_id');
    }

    public function author(){
        return $this->belongsTo('App\User','user_id');
    }

    public function updateCommentsCount(){
        if(!is_null($this->parent)){
            $this->parent->updateCommentsCount();
        } else {
            $this->comments_count = $this->comments_count + 1;
            $this->save();
        }
    }
}
