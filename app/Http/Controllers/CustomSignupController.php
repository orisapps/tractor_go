<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use App\User;
use Session;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use App\Farmer;
use App\Operator;
use App\Agent;

class CustomSignupController extends Controller
{
  protected $redirectTo = '/home';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('guest');
  }

      //

public function addUser(Request $request) {

       $users = User::where('email', '=', $request->input('email'))->first();
     
       if ($users === null) {
// user doesn't exist
         // now we get our form data from Request
         //users table save
     	$email 		= $request->input('email'); // request coming from ajax
     	$password 	= $request->input('password'); // request comming from ajax
      $phone    = $request->input('phone');
      $firstname = $request->input('first_name');
      $lastname = $request->input('last_name');
      $fullname =  $firstname.' '.$lastname;
      // $status     = "inactive"; // this can be use to check if user account is activated
      //farmers details save
      $farm_type = $request->input('farm_type');
      $farm_name = $request->input('farm_name');
      $farm_address = $request->input('farm_location');
      $attached_cluster = $request->input('farm_cluster');
      $description = $request->input('farmer_bio');
      //all users type
      $user_type = $request->input('thing');

        //Operators details save
      $tractor_type = $request->input('tractor_type');
      $tractor_model = $request->input('tractor_model');
      $tractor_location = $request->input('tractor_location');
      $attached_cluster = $request->input('operator_cluster');
      $mileage = $request->input('mileage');





         // note Laravel uses an encryption system called bcrypt
         // this has been the secure foundation for login queries
         // so here we are to encrypt as Laravel will accept when doing Auth
         $hash_password = bcrypt($password);

     	// FARMER info save
      if ($user_type == '1') {
         $users = new User();
         $users->email    = $email;
         $users->password = $hash_password;
         $users->phone =$phone;
         $users->fullname = $fullname;
         $users->firstname = $firstname;
         $users->lastname = $lastname;
         $users->farm_type  = $farm_type;
         $users->farm_name = $farm_name;
         $users->farm_address  = $farm_address;
         $users->attached_cluster = $attached_cluster;
         $users->description  = $description;
         $users->user_type   = $user_type;
         $users->account_type   = "FARMER";
         $users->save();
         Mail::to($email)->send(new WelcomeMail($users));


           $users = array(
             'status'  => 'success',
             'message' => 'Your registeration was successfully'
           );
           return response()->json($users);
           // // // return a msg dumb msg with client email

         }else if ($user_type == '2') {
           // OPERATOR info save

              $users = new User();
              $users->email    = $email;
              $users->password = $hash_password;
              $users->phone =$phone;
              $users->fullname = $fullname;
              $users->firstname = $firstname;
              $users->lastname = $lastname;
              $users->tractor_type  = $tractor_type;
              $users->tractor_model = $tractor_model;
              $users->tractor_location  = $tractor_location;
              $users->attached_cluster = $attached_cluster;
              $users->mileage  = $mileage;
              $users->user_type   = $user_type;
              $users->account_type   = "OPERATOR";
              $users->save();



              Mail::to($email)->send(new WelcomeMail($users));


                $users = array(
                  'status'  => 'success',
                  'message' => 'Your registeration was successfully'
                );
                return response()->json($users);
                // return a msg dumb msg with client email
  }
  
  else {
    $users = array(
    'status'  => 'error',
    'message' => "Can't register Your account! Please check your infomation"
  );
  return response()->json($users);
  }






}else {
                    $users = array(
              				'status'  => 'error',
              				'message' => 'This Email is Registerd  Already!  Please Try a New Email !'
              			);
                   return response()->json($users);
                  }


}

}
