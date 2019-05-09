<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Contactcontroller extends Controller
{
    public function contact()
    {
        return view('Contact');
    }

     public function contactsave(Request $req)
    {
    	/* $name=$req->input('box name'); */
        $First_name = $req->input('firstname');  
        $Last_name = $req->input('lastname');
        $Email = $req->input('email');
        $Phone = $req->input('phone');
        $Message = $req->input('message');

         /* $data = array('col name' =>$Email_address , 'col name' =>$Password); */
         $data = array('First_name' =>$First_name ,'Last_name' =>$Last_name,'Email' =>$Email ,
          'Phone' =>$Phone,'Message' =>$Message);

          DB::table('contact')->insert($data);
          return redirect('/contact');


    }        
}
