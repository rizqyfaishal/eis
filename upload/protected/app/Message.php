<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{

    use SoftDeletes;
    protected $dates = ['delete_at'];
    protected $fillable = ['email_from','name_from','message'];
}