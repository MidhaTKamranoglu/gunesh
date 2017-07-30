<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Attendance;


class TeacherController extends Controller
{
   
    public function attendance($id){
    
    // $users = User::all();
    	$user = User::where('group_id',$id)->get();

      return view('attendance',compact('user'));
  }
  public function attendance_check(Request $request,$id){

    
        $attendance=new Attendance;


          $user = User::find($id);

      	$attendance->group_id=$user->group_id;
      	$attendance->user_id=$user->id;

            $attendance->status=$request->status;

        $attendance->save();

          



            return back();
  }
}
