<?php
/**
 * Created by PhpStorm.
 * User: Rizqy
 * Date: 4/17/2016
 * Time: 11:50 AM
 */

namespace App\Helper;


use App\Attachment;
use App\AttachmentCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait AttachmentHelper
{
    public function getHashDirectory($hashedFileName,$extension){
        return implode('/', str_split(substr($hashedFileName, 0, 30), 3)).'.'.$extension;
    }

    public function saveFile($file,$category){
        $cat = AttachmentCategory::where('id','=',$category)->first();
        if(is_null($cat)){
            abort(500);
        }
        $new_attach = new Attachment();
        $new_attach->size = $file->getClientSize();
        $new_attach->extension = $file->getClientOriginalExtension();
        $new_attach->filename = $file->getClientOriginalName();
        $new_attach->uploaded_at = Carbon::now();
        $new_attach->mime_type = $file->getMimeType();
        $cat->attachments()->save($new_attach);
        $id = $new_attach->id;
        $hashedFileName = md5($id);
        $new_attach->hashcode = $hashedFileName;
        $new_attach->update();
        $hashed = $this->getHashDirectory($hashedFileName,$file
            ->getClientOriginalExtension());

        Storage::disk('local')->put($hashed,File::get($file));
        return $new_attach;
    }

    public function updateFile($new_attach,$file){
        $new_attach->size = $file->getClientSize();
        $new_attach->extension = $file->getClientOriginalExtension();
        $new_attach->filename = $file->getClientOriginalName();
        $new_attach->uploaded_at = Carbon::now();
        $new_attach->mime_type = $file->getMimeType();
        $new_attach->update();
        $hashed = $this->getHashDirectory($new_attach->hashcode,$file
            ->getClientOriginalExtension());

        Storage::disk('local')->put($hashed,File::get($file));
        return $new_attach;
    }

}