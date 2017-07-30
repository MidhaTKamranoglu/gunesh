<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\User;
use App\Parents;
use Auth;


class StudentsController extends Controller
{
    public function student_show ($id){

     $student = Students::find($id);


        $user = User::where('id',$student->id)->first();
        $parents = Parents::where('student_kart',$student->kart_id)->first();

        if ($student->kart_id==$parents->student_kart) {
        	if ($student->acces_status==1) {
            return view ('student',compact('user'));
        		
        	}
        	else{
        		return back();
        	}
        	
        }
        else{
        	return 'sen hec bura sey etme';
        }

  
          
}
    public function profile_connect(Request $request){

    // $id = Auth::user()->id;

        $student = Students::where('user_id',Auth::user()->id)->first();

      $insert = Students::find($student->id);
            $insert->access_status=$request->access_status;


          


            $insert->save();

            return back();
  }
}
