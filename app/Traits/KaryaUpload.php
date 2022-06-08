<?php
namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait KaryaUpload
{
    public function UserImageUpload($query)
    {
        $image_name = rand(182, 260);
        $ext = strtolower($query->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'karya/';
        $image_url = $upload_path.$image_full_name;
        $success = $query->move($upload_path,$image_full_name);
        return $image_url;
    }
}