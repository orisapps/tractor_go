<?php

namespace Backpack\CRUD\app\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;
use App\Farmer;
use App\Operator;
use App\Agent;
use App\Cluster;
use Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $limit = 10;


    public function index()
    {


      $users = User::latest()->where('user_type',  '1')->orderBy('created_at')->paginate($this->limit);
      $agents = User::latest()->where('user_type',  '5')->orderBy('created_at')->paginate($this->limit);
    return view('backpack::pages.user.user', compact('users', 'agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('backpack::pages.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
      $this->validate($data, [
          'fullname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'mobile' => 'required|string',

      ]);

       User::create([
          'fullname' => $data['fullname'],
          'mobile' => $data['mobile'],
          'email' => $data['email'],
          'username' => $data['username'] = str_random(8),
          'password' => $data['password'] = str_random(10),
          'birthday' => $data['birthday'],
          'gender' => $data['gender'],
          'address' => $data['address'],
          'city' => $data['city'],
          'state' => $data['state'],
          'country' => $data['country'],
          'bank' => $data['bank'],
          'bankname' => $data['bankname'],
          'banknumber' => $data['banknumber'],
          'status' => 1,
          'refid' => $data['refid'],

      ]);

      Session::flash('success', 'New User Added Successfully !');

      return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {

         return view('backpack::pages.user.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      Session::flash('success', 'User Records Deleted successfully !');

      return redirect(route('users.index'));
    }
}
