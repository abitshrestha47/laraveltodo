<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;

class TodoController extends Controller
{
    //

    public function index(){
        return view('welcome',['list'=>todo::all()]);
    }
    public function save(Request $req){
        $newObj=new todo();
        $newObj->title=$req->todo;
        $newObj->save();
        return redirect('/');
    }
    public function delete($id){
        $data=todo::find($id);
        $data->delete();
        return redirect('/');
    }
}
