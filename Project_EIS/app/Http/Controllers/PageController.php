<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Helper\RegistersUsers;
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
        return view('home');
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



}
