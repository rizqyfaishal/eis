<?php

namespace App\Http\Controllers;

use App\Helper\AttachmentHelper;
use Illuminate\Http\Request;

use App\Http\Requests;

class EventController extends Controller
{


    use AttachmentHelper;

    public function __construct()
    {
        $this->middleware('auth-admin');
    }

    public function store(Requests\EventRequest $request){

    }

}
