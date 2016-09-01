<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Helper\AttachmentHelper;
use App\Helper\PageDescription;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AttachmentController extends Controller
{

    use AttachmentHelper;


    public function index(){
        return response()->json([
            'status' => 'ok',
            'data' => Attachment::all()
        ]);
    }


    public function get($hashcode){
        $file = Attachment::where('hashcode','=',$hashcode)->first();
        if(is_null($file)){
            abort(404);
        }
        $dir = $this->getHashDirectory($file->hashcode,$file->extension);
        $base = storage_path('app/');
        return response()->download($base.$dir,$file->filename,[
            'Content-Type' => $file->mime_types
        ]);
    }

    public function delete($hashcode){
        $file = Attachment::where('hashcode','=',$hashcode)->first();
        if(is_null($file)){
            abort(404);
        }
        $bool = $file->delete();
        if(!$bool){
            abort(500);
        }
        return redirect()->back();
    }

    public function showConfirmation($hashcode){
        $file = Attachment::where('hashcode','=',$hashcode)->first();
        if(is_null($file)){
            abort(404);
        }
        return view('dashboard-admin-file-confirmation-delete')->with([
            'file' => $file
        ]);
    }

}
