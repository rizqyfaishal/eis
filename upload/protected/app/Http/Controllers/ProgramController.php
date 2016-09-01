<?php

namespace App\Http\Controllers;

use App\Helper\AttachmentHelper;
use App\Program;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ProgramController extends Controller
{

    use AttachmentHelper;

    public function __construct()
    {
        $this->middleware('auth-admin');
    }

    public function save(Requests\ProgramRequest $request){
        $program = Program::create($request->all());
        if(is_null($program)){
            abort(500);
        }
        if($request->hasFile('thumbnails')){
            $files = $request->file('thumbnails');
            $arr = array();
            foreach ($files as $file){
                $file = $this->saveFile($file);
                array_push($arr,$file);
            }
            $program->thumbnails()->saveMany($arr);
        }
        Session::flash('program_created',true);
        return redirect(action('DashboardController@programsManager'));
    }

    public function edit($id){
        $program = Program::find($id);
        if(is_null($program)){
            abort(404);
        }
        return view('dashboard-admin-program-edit')->with([
            'program' => $program
        ]);
    }

    public function update($id, Requests\ProgramEditRequest $request){
        $program = Program::find($id);
        if(is_null($program)){
            abort(404);
        }
        $program->update($request->all());
        if($request->hasFile('thumbnails')){
            $files = $request->file('thumbnails');
            $arr = array();
            foreach ($files as $file){
                $file = $this->saveFile($file);
                array_push($arr,$file);
            }
            $program->thumbnails()->saveMany($arr);
        }
        Session::flash('program_edited',true);
        return redirect(action('DashboardController@programsManager'));
    }

    public function show($id){
        $program = Program::find($id);
        if(is_null($program)){
            abort(404);
        }
        return view('viewpost')->with([
            'article' => $program
        ]);
    }

    public function showDeleteConfirmation($id){
        $program = Program::find($id);
        if(is_null($program)){
            abort(404);
        }
        return view('dashboard-admin-program-delete-confirm')->with([
            'program' => $program
        ]);
    }

    public function delete($id){
        $program = Program::find($id);
        if(is_null($program)){
            abort(404);
        }
        if($program->delete()){
            Session::flash('program_deleted',true);
            return redirect(action('DashboardController@home'));
        };
        abort(500);
    }
}
