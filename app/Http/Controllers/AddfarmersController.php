<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class AddfarmersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if( Auth::check() ){


   $viewaddfarmer = User::where('farmer_agent', Auth::user()->agent_code)->orderBy('created_at', 'DESC')->paginate(4);

    return view('userdashboard.addfarmers.index', ['viewaddfarmer'=> $viewaddfarmer]);
}
return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if( Auth::check() ){
         return view('userdashboard.addfarmers.create');
       }
       return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $farmeragent  = Auth::user()->agent_code;
        $password 	= $request->input('password');
        $email 	= $request->input('email');
        $farmeragent  = Auth::user()->agent_code;
        $hash_password = bcrypt($password);
        if(Auth::check()){
     $addfarmer = User::create([


        'email'=> $email,
       'password'=> $hash_password,
       'phone'=> $request->input('phone'),
      'firstname' => $request->input('firstname'),
      'lastname' => $request->input('lastname'),
      'fullname' =>  $firstname.' '.$lastname,

      'farm_type' => $request->input('farm_type'),
      'farm_name' => $request->input('farm_name'),
      'farm_address' => $request->input('farm_location'),
      'farmer_agent' => $farmeragent,
      'account_type' => 'FARMER',
      'attached_cluster' => $request->input('farm_cluster'),
      'description' => $request->input('farmer_bio'),
      //all users type
      'user_type' => '1',




     ]);


     if($addfarmer){
         return redirect()->route('showmyfarmers')
         ->with('success' , 'Farmer Account created successfully');
     }

 }

     return back()->withInput()->with('errors', 'Error creating new company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
