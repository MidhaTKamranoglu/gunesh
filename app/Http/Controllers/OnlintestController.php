<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlineTest;



class OnlintestController extends Controller
{
    public function check(Request $request){
    	$idn = $request->id;
    $test = OnlineTest::find($idn);
  $cavab = $test->answer;
  
  $answerr = $request->answer;
if ($cavab==$answerr) {
return 'ela';
	
}
else{
	return 'duz deil';
}
 
 

    }
    public function test(){
    $test = OnlineTest::all();
    

      return view('onlinetest',compact('test'));
  }
}
