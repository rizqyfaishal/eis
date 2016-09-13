<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Article;
use App\Ask;
use App\Event;
use App\Helper\RegistersUsers;
use App\Program;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{


    use RegistersUsers;

    public function index(){
        return view('home')->with([
            'events' => Event::all(),
            'articles' => Article::all()
        ]);
    }

    public function programs(){
        return view('our-program')->with([
            'programs' => Program::all()
        ]);
    }

    public function getAskJSON($id){
        $ask = Ask::find($id);
        if(is_null($ask)){
            abort(404);
        }
        return response()->json([
            'status' => true,
            'data' => $ask
        ]);
    }


    public function checkUnique($email){
        $email = User::where('email','=',$email)->first();
        if(is_null($email)){
            return response()->json([
                'status' => true
            ]);
        }
        return response()->json([
            'status' => false
        ]);
    }

    public function registerSuccess(){
        if(Session::has('register-success')){
            return view('register-success');
        }
        return redirect('/');
    }

    public function meetEIS(){
        $description = Admin::first()->description;
        return view('meet-eis')->with([
            'description' => $description
        ]);
    }

    public function meet(){
        $description = Admin::first()->description;
        return view('meet')->with([
            'description' => $description
        ]);
    }

    public function contactUs(){
        $auth = Auth::user();
        $authAvailable = false;
        if(!is_null($auth)){
            $authAvailable = true;
            return view('contact-us')->with([
                'authAvailable' => $authAvailable,
                'email' => $auth->email,
                'name' => $auth->fname .' '.$auth->lname
            ]);
        }
        return view('contact-us')->with([
            'authAvailable' => $authAvailable
        ]);
    }

    public function akunSuspended(){
        if(!Session::has('suspended')){
            abort(404);
        }
        Auth::guard($this->getGuard())->logout();
        return view('register-suspend');
    }

    public function akunRejected(){
        if(!Session::has('rejected')){
            abort(400);
        }
        Auth::guard($this->getGuard())->logout();
        return view('register-rejected');
    }

    public function emailTemplate(){
        return view('emails.welcome');
    }



}
