<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Group;
use App\Ruller;



class RullerController extends Controller
{
    public function addruller(){
    $group = Group::all();
    $users = User::all();

      return view('addruller',compact('group','users'));
  }
   public function ruller(){
    $ruller = Ruller::all();
    

      return view('ruller',compact('ruller'));
  }
   public function insert(Request $request){

        $ruller = new Ruller;
            $ruller->teacher=$request->teacher;
            $ruller->time=$request->time;
            $ruller->subject=$request->subject;
            $ruller->teacher=$request->teacher;
            $ruller->group_id=$request->group_id;




        $ruller->save();
        return back();
    }
}
