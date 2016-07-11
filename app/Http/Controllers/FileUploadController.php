<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;

use Storage;

class FileUploadController extends Controller
{
    public function home ()
    {
      return view ('home');
    }

    public function upload ()
    {
      //upload file
      $fileName = Input::file('fileUpload')->getClientOriginalName();
      Storage::disk('public')->put($fileName, Input::file('fileUpload'));

      // print_r($fileName);
      return back();
    }
}
