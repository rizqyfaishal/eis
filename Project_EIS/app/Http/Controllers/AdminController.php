<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth-admin');
    }

    public function update(Requests\EditAkunRequest $request){
        $admin = Auth::user()->user;
        if(is_null($admin)){
            abort(404);
        }
        $admin->update($request->all());
        $admin->user->update($request->all());
        Session::flash('change_akun_success','Sukses');
        return redirect()->back();
    }

}
