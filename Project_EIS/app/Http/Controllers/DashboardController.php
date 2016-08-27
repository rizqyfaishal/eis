<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth-admin');
    }

    public function home(){
        return view('dashboard-admin-home')->with([
            'admin' => Admin::with('user')->first()
        ]);
    }
}
