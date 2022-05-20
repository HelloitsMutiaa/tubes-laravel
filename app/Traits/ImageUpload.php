<?php
namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait ImageUpload
{
    public function AdminImageUpload($query)
    {
        $image_name = rand(1, 181);
        $ext = strtolower($query->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'image/';
        $image_url = $upload_path.$image_full_name;
        $success = $query->move($upload_path,$image_full_name);
        return $image_url;
    }
}