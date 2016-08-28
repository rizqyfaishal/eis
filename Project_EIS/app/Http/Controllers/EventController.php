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

    public function edit($id){
        $event = Event::find($id);
        if(is_null($event)){
            abort(404);
        }
        return view('dashboard-admin-edit-event')->with([
            'event' => $event
        ]);
    }

    public function update($id,Requests\EventUpdateRequest $request){
        $event = Event::find($id);
        if(is_null($event)){
            abort(404);
        }
        $t = $event->update($request->all());
        if($request->hasFile('thumbnail')){
            $this->updateFile($event->thumbnail(),$request->file('thumbnail'));
        }
        if(!$t){
            abort(500);
        }
        Session::flash('event_updated','Event Update');
        return redirect(action('DashboardController@eventManager'));
    }

    public function delete($id){
        $event = Event::find($id);
        if(is_null($event)){
            abort(404);
        }
        if($event->delete()){
            Session::flash('event_deleted',true);
            return redirect(action('DashboardController@eventManager'));
        }
        abort(500);
    }

}
