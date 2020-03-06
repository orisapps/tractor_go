<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class CustomLoginController extends Controller
{

  use AuthenticatesUsers;


  protected $redirectTo = '/home';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('guest')->except('logout');
  }

  public function frontpage(){
      return view('front_end.index');
    }
    // do login Auth
    public function loginUser(Request $request)
    {
    	$email	       = $request->email;
    	$password      = $request->password;
    	$rememberToken = $request->remember;

    	// now we use the Auth to Authenticate the users Credentials

		// Attempt Login for members
		if (Auth::guard('user')->attempt(['email' => $email, 'password' => $password], $rememberToken)) {
      session ( [
                    'email' => $request->get ( 'email' )
            ] );
			$msg = array(
				'status'  => 'success',
				'message' => 'Login Successful'
			);
			return response()->json($msg);
		} else {
			$msg = array(
				'status'  => 'error',
				'message' => 'Invalid credentials. Please try again.'
			);
			return response()->json($msg);
		}
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

}
