<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config\Session;
use App\Models\Window; 

class ImageController extends Controller
{
    public function upload(Request $request)
    {
       $windows = Window::All();
       $path = $request->file('image')->store('uploads', 'public'); 

       session()->now('status',"the data has been uploaded, if you are logged in"); 

       return view('home', ['path' => $path], compact('windows'));
    }
} 
