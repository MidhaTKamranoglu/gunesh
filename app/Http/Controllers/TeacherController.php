<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TeacherController extends Controller
{
   
    public function attendance(){
    $users = User::all();

      return view('attendance',compact('users'));
  }
}
