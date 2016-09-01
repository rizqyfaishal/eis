<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AskCategory extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];
    protected $fillable = ['name'];

    public function asks(){
        return $this->belongsToMany('App\Ask','asks_asks_categories_pivot','ask_category_id');
    }
}
