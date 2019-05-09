<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Myhomecontroller extends Controller
{
      public function myhome()
    {
        return view('myhome');
    }

    public function homesave(Request $req)
    {
    	/* $name=$req->input('box name'); */
        $Entrydate = $req->input('entrydate');  
        $Entrytime = $req->input('entrytime');
        $Exitdate = $req->input('exitdate');
        $Exittime = $req->input('exittime');
        $Car_Number = $req->input('number'); 

         /* $data = array('col name' =>$Email_address , 'col name' =>$Password); */
         $data = array('Entrydate' =>$Entrydate ,'Entrytime' =>$Entrytime,'Exitdate' =>$Exitdate,'Exittime' =>$Exittime,'CarNumber' =>$Car_Number);

          DB::table('home')->insert($data);
          return redirect('/myhome');
          //echo "it's not easy";

    } 


  
  
	   
}




