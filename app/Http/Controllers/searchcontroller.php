<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;
use App\search;
use app\update;
use searchResult;
use Response;
use DB;

class searchcontroller extends Controller
{
     public function searchpage()
    {
    	
        return view('search');
    }


   public function getdata()
   {


	   	$data['data'] = DB::table('home')->get();

	   	if(count($data) > 0 )
	   	{
	   		return view('search', $data);
	   	}
	   	else
	   	{
	   		return view('search');
	   	}
   }

   
   public function search(Request $request)
   {
    
      if($request->search){
        
        $searchs = DB::table('home')
              ->where('Entrydate', 'like', '%'. $request->search .'%')
              ->orWhere('Entrytime', 'like', '%'. $request->search.'%')
              ->orWhere('Exitdate', 'like', '%'. $request->search .'%')
              ->orWhere('Exittime', 'like', '%'. $request->search .'%')
              ->orWhere('CarNumber', 'like', '%'. $request->search . '%')
              ->get();

          if($searchs){
            foreach ($searchs as $key => $search) {
              echo 'Entrydate:'. $search->Entrydate .'</br>'.'Entrytime:'. $search->Entrytime .'</br>' .'Entrydate:'. $search->Exitdate .'</br>' .'Exittime:'. $search->Exittime .'</br>' .'CarNumber:'. $search->CarNumber  .'</br>';
              
            }

          }
      }
    }


    public function editdata($CarNumber){
      $value = search::all();
      //$value = search::find($CarNumber);
      if(count($value) > 0){
         return view('edit',['value' =>$value]);
      }
     else{
      $value = search::all();
       return view('searchs',['value' =>$value]);
     }
    }

   /* public function updatedata(Request $req){

         // $data = array('col name' =>$Email_address , 'col name' =>$Password); 
         $data = array('Entrydate' =>$req->Entrydate ,'Entrytime' =>$req->Entrytime,'Exitdate' =>$req->Exitdate,'Exittime' =>$req->Exittime,'CarNumber' =>$req->Car_Number);

          DB::table('home')->where ('CarNumber',$req->CarNumber)->update($data);
           //return redirect('/searchs');
    }*/

    public function delete($CarNumber){

      DB::table('home')->where('CarNumber',$CarNumber)->delete();
      return redirect('/searchs');

    }
}



 