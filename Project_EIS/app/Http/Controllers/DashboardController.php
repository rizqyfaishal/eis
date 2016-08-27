<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Alumni;
use App\FutureStudent;
use App\Student;
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

    public function membersManager(){
        return view('dashboard-admin-member-manager')->with([
            'alumnis' => Alumni::with('user')->get(),
            'fStudents' => FutureStudent::with('user')->get(),
            'cStudents' => Student::with('user')->get()
        ]);
    }


}
