<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Spacecontroller extends Controller
{
    public function space()
    {
        return view('Space');
    }

     public function spacesave(Request $req)
    {
    	/* $name=$req->input('box name'); */
        $Front_side = $req->input('front');  
        $Middle_side = $req->input('middle');
        $Back_side = $req->input('back');

         /* $data = array('col name' =>$Email_address , 'col name' =>$Password); */
         $data = array('Front_side' =>$Front_side ,'Middle_side' =>$Middle_side,'Back_side' =>$Back_side);

          DB::table('space')->insert($data);
          return redirect('/myhome')-> with ("done");
          //echo "ok?";


    }        
}
