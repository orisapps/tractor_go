<?php

namespace Backpack\CRUD\app\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Agent;
use App\Farmer;
use App\User;
use Session;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $limit = 12;

    protected $uploadPath;

 public function __construct()
 {
     $this->middleware(backpack_middleware());
     $this->uploadPath = public_path('uploads');
 }


   public function index()
   {

        $agents = User::latest()->where('user_type',  '5')->orderBy('created_at')->paginate($this->limit);
        $operators = User::latest()->where('user_type',  '2')->orderBy('created_at')->paginate($this->limit);
        $users  = User::latest()->where('user_type',  '1')->orderBy('created_at')->paginate($this->limit);
         //$allpropers = Propertie::all();
       return view('backpack::pages.agents.index', compact('agents','users','operators'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $users  = User::latest()->where('user_type',  '1')->orderBy('created_at')->paginate($this->limit);
    $agents = User::latest()->where('user_type',  '5')->orderBy('created_at')->paginate($this->limit);
    $operators = User::latest()->where('user_type',  '2')->orderBy('created_at')->paginate($this->limit);
      return view('backpack::pages.agents.create', compact('agents', 'users','operators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function store(Request $request)
   {
       $this->validate($request, [

         'firstname' => 'required',
         'lastname' => 'required',
         'email' => 'required',
         'address' => 'required',
         'location' => 'required',
         'phone' => 'required',
         'password' => 'required',


       ]);
       $firstname 		= $request->input('firstname');
       $lastname 		= $request->input('lastname');
       $email 		= $request->input('email');
       $password 		= $request->input('password');
       $address 		= $request->input('address');
       $phone 		= $request->input('phone');
       $location 		= $request->input('location');
       $data = $this->handleRequest($request);

       $hash_password = bcrypt($password);



       $agents = new User();

       $agents->firstname = $firstname;
       $agents->lastname = $lastname;
       $agents->fullname = $firstname.''.$lastname ;
       $agents->email    = $email;
       $agents->password = $hash_password;
       $agents->phone = $phone;
       $agents->location    = $location;
       $agents->address = $address;
       $agents->agent_code = $request['agent_code'] ='TOG'. strtoupper(str_random(7));
       $agents->user_type   = "5";
       $agents->account_type   = "AGENT";
       $agents->save();



       Session::flash('success', 'New Agent have been added successfully!');

       return redirect(route('agents.index'));
   }

   private function handleRequest($request)
  {
      $data = $request->all();

      if ($request->hasFile('image'))
      {
          $image       = $request->file('image');
          $fileName    = $image->getClientOriginalName();
          $destination = $this->uploadPath;

          $image->move($destination, $fileName);

          $data['image'] = $fileName;
      }

      return $data;
  }



    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }
}
