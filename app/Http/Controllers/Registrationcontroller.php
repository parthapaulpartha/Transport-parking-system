<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\user;
use registration;

class Registrationcontroller extends Controller
{
     public function Registration()
    {
        return view('Registration');
    } 


    // insert into database
    public function Registrationsave(Request $req)
    {
      $this->validation($req);
    	/* $name=$req->input('box name'); */
        $F_name = $req->input('fname');  
        $L_name = $req->input('lname');
        $Email = $req->input('email');
        $Password = $req->input('password');
        $Re_password = $req->input('password_confirmation');
        $Phone = $req->input('phn');
        $birthday = $req->input('birthday');
        $Gender = $req->input('gender');
        $Address = $req->input('address');
        
          //$req['Password'] = bcrypt($req->password);
         /* $data = array('col name' =>$Email_address , 'col name' =>$Password); */
         $data = array('First_name' =>$F_name ,'Last_name' =>$L_name,'Email' =>$Email ,
          'Password' =>$Password,'Re_password' =>$Re_password , 'Phone' =>$Phone,'Birthday' =>$birthday , 
          'Gender' =>$Gender,'Address' =>$Address);


          DB::table('registration')->insert($data);
          //echo "kichu ki hoilo?";
          return redirect('/Login');
     }  

      // validation of register
     public function validation($request)
     {
        return $this->validate($request,[
        'fname' => 'required|max:255',
        'lname' => 'required|max:255',
        'email' => 'required|email|unique:registration|max:255',
        'password' => 'required|confirmed|max:255',
        
    ]);
     }  

    /* public function Loginsave(Request $req)
    {
         $this->validate($req,[
        'email' => 'required|email|max:255',
        'password' => 'required|max:255',
        
        ]);
        if(::attempt(['email'=>$req->email,'password'=>$req->password]))
        {
            return 'Login successfully';
        }   
         else{
            return 'Wrong Email_address or Password';
         }

   
     } */  
}
