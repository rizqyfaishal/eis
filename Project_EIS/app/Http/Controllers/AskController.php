<?php

namespace App\Http\Controllers;

use App\Ask;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AskController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('discussion',['except' => 'home']);
//    }

    public function home(){
        return view('ask-our-alumni')->with([
            'id' => Auth::user()->id,
            'asks' => Ask::where('isRoot','=',1)->paginate(15)
        ]);
    }

    public function newPost(){
        return view('ask-new-post');
    }

    public function show($id){
        $ask = Ask::find($id);
        if(is_null($ask) || !$ask->isRoot){
            abort(404);
        }
        return view('ask-show')->with([
            'ask' => $ask
        ]);
    }

    public function saveComment($id, Requests\AskReplyRequest $request){
        $user = Auth::user();
        if(is_null($user)){
            abort(404);
        }
        $ask = Ask::find($id);
        if(is_null($ask)){
            abort(404);
        }
        $ask_new = new Ask();
        $ask_new->ask_content = $request->input('content');
        $user->asks()->save($ask_new);
        $ask->reply()->save($ask_new);
        $ask->updateCommentsCount();
        return response()->json([
            'status' => true,
            'data' => $ask_new->load('parent','author')
        ]);
    }

    public function save(Requests\AskRequest $request){
        $auth = Auth::user();
        if(is_null($auth)){
            abort(500);
        }
        $ask = new Ask();
        $ask->ask_subject = $request->input('ask_subject');
        $ask->ask_content = $request->input('ask_content');
        $auth->asks()->save($ask);
        $ask->category()->sync($request->input('ask_category'));
        Session::flash('ask_created',true);
        return redirect(action('AskController@home'));
    }
}
