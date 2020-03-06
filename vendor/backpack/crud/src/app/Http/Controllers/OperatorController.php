<?php

namespace Backpack\CRUD\app\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Operator;
use App\Farmer;
use App\User;
use Session;

class OperatorController extends Controller
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
       return view('backpack::pages.operators.index', compact('users','operators','agents'));
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
    $Operators = User::latest()->where('user_type',  '5')->orderBy('created_at')->paginate($this->limit);
    $operators = User::latest()->where('user_type',  '2')->orderBy('created_at')->paginate($this->limit);
      return view('backpack::pages.operators.create', compact('Operators', 'users','operators','agents'));
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



       $Operators = new User();

       $Operators->firstname = $firstname;
       $Operators->lastname = $lastname;
       $Operators->fullname = $firstname.''.$lastname ;
       $Operators->email    = $email;
       $Operators->password = $hash_password;
       $Operators->phone = $phone;
       $Operators->location    = $location;
       $Operators->address = $address;
       $Operators->Operator_code = $request['Operator_code'] ='TOG'. strtoupper(str_random(7));
       $Operators->user_type   = "5";
       $Operators->account_type   = "Operator";
       $Operators->save();



       Session::flash('success', 'New Operator have been added successfully!');

       return redirect(route('Operators.index'));
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
     * @param  \App\Operator  $Operator
     * @return \Illuminate\Http\Response
     */
    public function show(Operator $Operator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operator  $Operator
     * @return \Illuminate\Http\Response
     */
    public function edit(Operator $Operator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operator  $Operator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operator $Operator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operator  $Operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operator $Operator)
    {
        //
    }
}
