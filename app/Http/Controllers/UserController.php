<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Parents;
use App\Students;
use App\Group;
use Socialite;
use Hash;



class UserController extends Controller
{
	public function check(){



        if (Auth::user()->type==1) {
        $students=new Students;
        $students->user_id=Auth::user()->id;
        $students->kart_id=rand();
        $students->save();
        }
        if (Auth::user()->type==2) {
        $parents=new Parents;
        $parents->user_id=Auth::user()->id;
      
        $parents->save();
        }
         return redirect()->route('home');

    
}
 // public function redirect()
 //    {
 //        return Socialite::driver('facebook')->redirect();   
 //    }   

 //    public function callback(SocialAccountService $service)
 //    {
 //        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());

 //        auth()->login($user);

 //        return redirect()->to('/home');
 //    }
        public function profile_update(Request $request ){

            $user = Auth::user();
        $pass=$request->password;
        $confirmpass=$request->password_confirmation;
        if($pass==$confirmpass)
        {
            $user->password=bcrypt($pass);
            $user->username=$request->username;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->mobile=$request->mobile;
            $user->about=$request->about;
            $user->date=$request->date;


  if ($request->img!="") {
              $fileName           =$request->img->getClientOriginalName();
              $newName            =time().'_'.$fileName;
              $request->img->move('uploads/',$newName);


  }else{
              $newName            =$user->img;
          }

            $user->img=$newName;
            $user->save();


            $user->save();
            return redirect('/profile');
        }
        if ($pass==null) {

                $user->username=$request->username;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->mobile=$request->mobile;
            $user->about=$request->about;
            $user->date=$request->date;


           if ($request->img!="") {
              $fileName           =$request->img->getClientOriginalName();
              $newName            =time().'_'.$fileName;
              $request->img->move('uploads/',$newName);


  }else{
              $newName            =$user->img;
          }

            $user->img=$newName;
            $user->save();

            return redirect('/profile');

        }
        

        }

        public function profile (){
    if ( Auth::user()->type==2) {
       return view('parent');
    }
    if ( Auth::user()->type==1) {
       return view('profile');
    }
    if (Auth::user()->type==3) {
       return view ('reseption');
    }
     if (Auth::user()->type==4) {
      $users=User::all();
       return view ('admin',compact('users'));
    }
}
public function parent_update(Request $request){
   $kart = $request->kart_id;

  $students = Students::all();

   return view ('parent');
  }

  public function edit ($id){
  
    $user = User::find($id);
          
            return view ('edit',compact('user'));
}
  public function update(Request $request,$id){

     $user = User::find($id);

      if ($request->img!="") {
              $fileName           =$request->img->getClientOriginalName();
              $newName            =time().'_'.$fileName;
              $request->img->move('uploads/',$newName);


  }else{
              $newName            =$user->img;
          }
            $user->username=$request->username;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->mobile=$request->mobile;
            $user->about=$request->about;
            $user->date=$request->date;
            $user->type=$request->type;


          

            $user->img=$newName;
            $user->save();

            return back();
  }
  public function adduser(){
    $group = Group::all();
      return view('useradd',compact('group'));
  }

  public function insert(Request $request){

        $user = new User;
     

      if ($request->img!="") {
              $fileName           =$request->img->getClientOriginalName();
              $newName            =time().'_'.$fileName;
              $request->img->move('uploads/',$newName);


  }else{
              $newName            ='default.png';
          }
            $user->username=$request->username;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->mobile=$request->mobile;
            $user->about=$request->about;
            $user->date=$request->date;
            $user->type=$request->type;
            $user->group_id=$request->group_id;

            $pass = $request->password;
           $passw =  bcrypt($pass);
            $user->password=$passw;



          

            $user->img=$newName;
            $user->save();

            return back();
  }
}