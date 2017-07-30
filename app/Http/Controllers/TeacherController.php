<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TeacherController extends Controller
{
   
    public function attendance($id){
    
    // $users = User::all();
    	$user = User::where('group_id',$id)->get();

      return view('attendance',compact('user'));
  }
}
