<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Alumni;
use App\Helper\RegistersUsers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/success';

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'phone' => 'required|max:15',
            'major' => 'required|max:255',
            'batch' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    public function reg(Request $request){
        $alumni = Alumni::create($request->all());
        if(is_null($alumni)){
            abort(500);
        }
        $user = $this->postRegister($request);
        if(is_null($user)){
            abort(500);
        }
       $alumni->user()->save($user);
        Session::flash('register-success',true);
        return redirect($this->redirectTo);/**/
    }

    public function delete($id){
        $alumni = Alumni::find($id);
        if(is_null($alumni)){
            abort(500);
        }
        $alumni->user->delete();
        $alumni->delete();
        Session::flash('user_deleted',true);
        return redirect(action('DashboardController@membersManager'));
    }

}
