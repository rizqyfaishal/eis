<?php

namespace App\Http\Controllers;

use App\Helper\AttachmentHelper;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DashboardUserController extends Controller
{
    use AttachmentHelper;


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){
        return view('dashboard-user.home')->with([
            'user' => Auth::user()
        ]);
    }

    public function gantiAvatar(){
        return view('dashboard-user.changeAvatar')->with([
            'user' => Auth::user()
        ]);
    }

    public function gantiAvatarPost(Requests\UserChangeAvatarRequest $request){
        $user = Auth::user();
        if(is_null($user->avatar)){
            $file = $request->file('avatar');
            $attach = $this->saveFile($file);
            $user->avatar()->save($attach);
        } else {
            $file = $request->file('avatar');
            $attach = $this->updateFile($user->avatar,$file);
        }
        Session::flash('change_avatar_succss','Sukses');
        return redirect()->back();
    }

    public function gantiPassword(){
        return view('dashboard-user.updateAkun')->with([]);
    }

    public function gantiPasswordPost(Requests\UserChangePasswordRequest $request){
        $user = Auth::user();
        if(!Hash::check($request->input('old_password'), $user->password)) {
            Session::flash('change_password_failed','Password lama tidak valid!');
            return redirect()->back();
        }
        $user->password = bcrypt($request->input('password'));
        $user->save();
        Session::flash('change_password_success','Penggantian Password Sukses!');
        return redirect()->back();
    }
}
