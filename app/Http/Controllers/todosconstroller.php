<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todomodel;

class todosconstroller extends Controller
{
    public function index(){
        $data = todomodel::all();
        return view('todo', compact('data'));
    }
    public function view($id){
        $data = todomodel::find($id);
        return view('viewtodo', compact('data'));
    }
}
