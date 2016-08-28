<?php

namespace App\Http\Controllers;

use App\Event;
use App\Helper\AttachmentHelper;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{


    use AttachmentHelper;

    public function __construct()
    {
        $this->middleware('auth-admin');
    }

    public function store(Requests\EventRequest $request){
        $event = Event::create($request->all());
        if(is_null($event)){
            abort(500);
        }
        if($request->hasFile('thumbnail')){
            $file = $this->saveFile($request->file('thumbnail'));
            $event->thumbnail()->save($file);
        }
        Session::flash('event_created','Event Created');
        return redirect('/dashboard/event');
    }

    public function show($id){
        $event = Event::find($id);
        if(is_null($event)){
            abort(404);
        }
        return view('event-show')->with([
            'event' => $event
        ]);
    }

}
