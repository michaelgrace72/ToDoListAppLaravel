<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
       public function index(){
        $todo = Todo::all();
        return view('index')->with('todos', $todo);
       }
       public function create(){
        return view('create');
       }
       public function details(){
        return view('details');
       }
       public function edit(){
        return view('edit');
       }

       public function update(){
       //masih nanti
       }
       public function delete(){
       //masih nanti
       }



       

}


