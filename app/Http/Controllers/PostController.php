<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Window;     
use App\Models\Genre;
use App\Models\User;             
use Illuminate\Support\Facades\DB;      

class PostController extends Controller
{   
    public function index()
    {   
        $windows = Window::All();
        // $windows = DB::table('windows')->simplePaginate(15);
        $user = auth()->user();
        return view('home',compact(["user","windows"]));
    }

    public function create()
    {
       return view('post.create');
    }
 
    public function store()
    {
        $data = request()->validate([
            'title' => '',
            'author_id' => '',
            'description' => '',
            'banner_filename' => '',
            'actors' => '',
            'rating' => '',
        ]); 
        Window::create($data);
        return redirect()->route('post.index');
    } 
    public function show($id)
    {
        $window = Window::findOrFail($id);
        return view('window.show', compact('window'));
    }

    public function edit($id)
    {
        $window = Window::findOrFail($id);
        return view('window.edit', compact('window'));
    }

    public function update($id)
    {
        $data = request()->validate([
            'title' => '',
            'author_id' => '',
            'description' => '',
            'banner_filename' => '',
            'actors' => '',
            'rating' => '',
        ]); 
        $window = Window::findOrFail($id);
        $window->update($data);
        return redirect()->route('post.show',$id);
    }

    public function destroy($id)
    {
        $window = Window::findOrFail($id);
        $window->delete();
        return redirect()->route('post.index');
    }
}