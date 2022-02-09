<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\member;

class dummyController extends Controller
{
    function getData()
    {
      return["name"=>"anil","email"=>"nikita@123gmail.com"];
    }
    function list()
    {
     return user::all();
    }
    function add(Request $req)
    {
      $member = new Member();
      $member->name=$req->name;
      $member->email=$req->email;
      $member->address=$req->address;
       $res= $member->save();
       if( $res)
       {
         return ["result"=>"data added"];
       }
       else
       {
        return ["result"=>"data not added"];
       }
    }

    public function update(Request $req)
    { 
      $member=member::find($req->id);
      $member->name=$req->name;
      $member->email=$req->email;
      $member->address=$req->address;
       $res= $member->save();
       if( $res)
       {
         return ["result"=>"data is updated"];
       }
       else
       {
        return ["result"=>"data is not updated"];
       }
     
    }
    public function show()
    { 
      $data=user::all();
      return view('home',["users"=>$data]);
    }
}

