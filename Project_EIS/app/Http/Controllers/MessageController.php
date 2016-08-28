<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    public function sendMessage(Requests\MessageRequest $request){
        $message = Message::create($request->all());
        if(is_null($message)){
            abort(500);
        }
        Session::flash('send_success',true);
        return redirect()->back();
    }

    public function reply(Requests\MessageReplyRequest $request){
        $flag = Mail::send('home',[],function($message){
            $message
                ->from('noreply@eisociety.org')
                ->to('rizqyfaishal@hotmail.com')
                ->subject('Welcome to Rizqy');
        });
        if($flag){
            Session::flash('sending_success',true);
            return redirect()->back();
        }
        abort(500);
    }

    public function delete($id){
        $message = Message::find($id);
        if(is_null($message)){
            abort(404);
        }
        $message->delete();
        Session::flash('delete_success',true);
        return redirect(action('DashboardController@inbox'));
    }
}
