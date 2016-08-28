<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $dates = ['delete_at'];
    protected $fillable = ['title','event_date','event_location','body'];

    public function thumbnail(){
        return $this->morphOne('App\Attachment','attach');
    }

    public function setEventDateAttribute($r){
        $r = date('m/d/Y H:i',strtotime($r));
        $waktu = Carbon::createFromFormat('d/m/Y H:i',$r);
        $this->attributes['event_date'] = $waktu->toDateTimeString();
    }

}
