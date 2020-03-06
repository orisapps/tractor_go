<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\User;
use App\Farmer;
use App\Operator;
use App\Agent;
use App\ComplainRequest;
use App\Local_government;
use App\State;

class CustomHomeController extends Controller
{
	protected $redirect = '/';
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

			$farm_cluster  = User::where('id', Auth::user()->id);

			$farmertitle = "Farmer";
			$operator		=	"Operator";
			$agent_code	=	"Agent";
    	return view('home')->with('farm_cluster', $farm_cluster);
    }


    public function lga($id)
    {
        $localgov = Local_government::where('state_id', $id)->pluck('name');

       return $localgov;


    }

    public function stateid($id)
    {
        $stateidap = State::where('id', $id)->pluck('name');

       return $stateidap;


    }

    public function state()
    {

        $state = State::all();
       return $state;


    }

    public function user_profile()
    {
			$farmers = Farmer::where('id', Auth::user()->id);
			 return view('userdashboard.userprofile');
    }

		public function joincluster($email)
		{
			$farm_cluster = User::find($email);
			 return view('userdashboard.join_cluster')->with('cluster', $farm_cluster);
		}




        public function profile_edit($id)
        {
            $user  =  User::find($id);
          return view('userdashboard.userprofile')->with('user', $user);

}

 public function viewcomplain_request()
    {

            $complain  = ComplainRequest::where('email', Auth::user()->email)->orderBy('created_at', 'DESC')->simplePaginate(3);

        return view('userdashboard.farmers.complain_view')->with('complain', $complain);
    }

  public function complain_request($id)
        {
            $user  =  User::find($id);
          return view('userdashboard.complain')->with('user', $user);

}



 public function complain_request_save(Request $request)
        {
           $email = $request->input('email'); // request coming from ajax
        $user_id = $request->input('id'); // request comming from ajax
      $subject  = $request->input('subject');
      $message = $request->input('message');
       $redate = date("YM");
      $reqid   =  uniqid();
      $request_tok= $redate.''.$reqid;
      if ($email == $email) {
      $comrequests = new ComplainRequest();
         $comrequests->email    = $email;
         $comrequests->user_id = $user_id;
         $comrequests->subject =$subject;
         $comrequests->message = $message;
         $comrequests->request_tok = $request_tok;
         $comrequests->status = "open";
        $comrequests->save();
          return redirect()->route('viewallrequest')->with("success" , "Your Request .$request_tok was submitted successfully");

           }
  
  else {
    $users = array(
    'status'  => 'error',
    'message' => "Can't register Your account! Please check your infomation"
  );

     return response()->json($comrequests);
  }

}

    public function logoutUser()
    {
    	Auth::guard('user')->logout();
 			Session::flush();
    	return redirect('/login');
    }
}
