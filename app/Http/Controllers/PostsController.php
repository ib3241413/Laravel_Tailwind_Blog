<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;



class PostsController extends Controller
{
  
    public function index()
    {
        
        return view('blog.index')
        ->with('posts',Post::get());
        
    } 

  
    public function create()
    {
        return view('blog.create');
    }

 
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
