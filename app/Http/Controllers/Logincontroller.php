<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Logincontroller extends Controller
{
   public function Login()
    {
        return view('Login');
    }  

   public function Loginsave(Request $req)
    {
         $this->validate($req,[
        'email' => 'required|email|max:255',
        'password' => 'required|max:255',
        
        ]);
       // if(::attempt(['email'=>$req->email,'password'=>$req->password]))
        //{
          //  return 'Login successfully';
        //}   
         //else{
           // return 'Wrong Email_address or Password';
        // }
          return redirect('/myhome');
   
     }   
}