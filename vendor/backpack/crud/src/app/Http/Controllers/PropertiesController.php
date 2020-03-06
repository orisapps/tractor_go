<?php

namespace Backpack\Base\app\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Propertie;
use Session;
class PropertiesController extends Controller
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
          $propers = Propertie::latest()->paginate($this->limit);
          $allpropers = Propertie::all();
        return view('backpack::pages.properties.index', compact('propers','allpropers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Propertie $propers)
    {
        $allpropers = Propertie::all();
        return view('backpack::pages.properties.create', compact('propers', 'allpropers'));
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

          'name' => 'required',
          'description' => 'required',
          'location' => 'required',
          'state' => 'required',
          'price' => 'required',
          'image' => 'mimes:jpg,jpeg,bmp,png,gif',

        ]);


        $data = $this->handleRequest($request);

        Propertie::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'document' => $request['document'],
            'location' => $request['location'],
            'image' => $data['image'],
            'state' => $request['state'],
            'price' => $request['price'],

        ]);

        Session::flash('success', 'Your Property have been added successfully!');

        return redirect(route('properties.index'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $allpropers = Propertie::all();
      $propers = Propertie::findOrFail($id);
        return view('backpack::pages.properties.show', compact('propers', 'allpropers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $allpropers = Propertie::all();
      $propers = Propertie::findOrFail($id);
        return view('backpack::pages.properties.edit', compact('propers', 'allpropers'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proper = Propertie::find($id);
        $proper->delete();
        Session::flash('success', 'Property Record Deleted successfully!');

        return redirect(route('properties.index'));
    }
}
