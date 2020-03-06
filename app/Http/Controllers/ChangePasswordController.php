<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Auth;
use App\Rules\MatchOldPassword;


use App\User;



class ChangePasswordController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

    	$this->middleware("auth:user")->except('logoutUser');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {

        return view('userdashboard.userprofile');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function update(Request $request, User $user)

    {

        $request->validate([

            'current_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],
            'phone' => ['required'],

            'new_confirm_password' => ['same:new_password'],

        ]);



        User::where('email', Auth::user()->email)->update([
          'phone'=> $request->phone,
          'password'=> bcrypt($request->new_password)]);


          return redirect()->route('changepassword')->with('success' , 'Profile Updated Successfully');

    }

}
