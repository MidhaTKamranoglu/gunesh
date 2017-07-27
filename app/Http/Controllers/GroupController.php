<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
      public function insert(Request $request){

        $group = new Group;
            $group->number=$request->name;

        $group->save();
        return back();
    }
}
