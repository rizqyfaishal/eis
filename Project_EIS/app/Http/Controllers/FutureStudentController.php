<?php

namespace App\Http\Controllers;

use App\FutureStudent;
use App\Helper\RegistersUsers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FutureStudentController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/success';

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'phone' => 'required|max:15',
            'school' => 'required|max:255',
            'student_number' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    public function reg(Request $request){
        $fStudent = FutureStudent::create($request->all());
        if(is_null($fStudent)){
            abort(500);
        }
        $user = $this->postRegister($request);
        if(is_null($user)){
            abort(500);
        }
        $fStudent->user()->save($user);
        Session::flash('register-success',true);
        return redirect($this->redirectTo);/**/
    }

}
