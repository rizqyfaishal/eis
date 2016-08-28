<?php

namespace App\Http\Controllers;

use App\FutureStudent;
use App\Helper\RegistersUsers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
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
            'student_number' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }


    public function reg(Request $request){
        $student = Student::create($request->all());
        if(is_null($student)){
            abort(500);
        }
        $user = $this->postRegister($request);
        if(is_null($user)){
            abort(500);
        }
        $student->user()->save($user);
        Session::flash('register-success',true);
        return redirect($this->redirectTo);/**/
    }

    public function delete($id){
        $Student = Student::find($id);
        if(is_null( $Student)){
            abort(500);
        }
        $Student->user->delete();
        $Student->delete();
        Session::flash('student_deleted',true);
        return redirect(action('DashboardController@membersManager'));
    }
}
