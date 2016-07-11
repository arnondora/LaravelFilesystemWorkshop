<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FileUploadController extends Controller
{
    public function home ()
    {
      return view ('home');
    }
}
