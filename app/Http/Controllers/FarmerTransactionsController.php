<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Farmer_transactions;
use Illuminate\Http\Request;
use App\User;
use Session;
use App\Mail\Invoice;
use Illuminate\Support\Facades\Mail;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
class FarmerTransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function viewhiredtractors()
    {

            $hiredtractors  = Farmer_transactions::where('email', Auth::user()->email)->orderBy('created_at', 'DESC')->simplePaginate(3);

        return view('userdashboard.farmers.hiredtractors_view')->with('hiredtractors', $hiredtractors);
    }

    public function agentviewhiredtractors()
    {

            $hiredtractors  = Farmer_transactions::where('farmer_agent', Auth::user()->agent_code)->orderBy('created_at', 'DESC')->simplePaginate(3);

        return view('userdashboard.farmers.agentviewhiredtractors_view')->with('hiredtractors', $hiredtractors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

public function addFarmerTractions(Request $request){
       $amount = $request->amount; // request coming from ajax
       $data = $request->session()->put('amount', $amount);


       $state 	= $request->state;
       $lga 	= $request->lga;
      $subscription_title  = $request->subscription_title;
      $service_type  = $request->service_type;
      $subscription_type = $request->subscription_type;
      $building_specification = $request->building_specification;
      $notes = $request->notes;
      $items_description = $request->items_description;
      $redate = date("YM");
      $reqid   =  uniqid();
      $paystack_ref = $redate.''.$reqid;

       $farmer_transactions = new Farmer_transactions();
      $farmer_transactions->email = Auth::user()->email;
      $farmer_transactions->fullname = Auth::user()->fullname;
      $farmer_transactions->phone =   Auth::user()->phone;
      $farmer_transactions->farmer_id = Auth::user()->id;
      $farmer_transactions->farmer_agent = Auth::user()->farmer_agent;
      $farmer_transactions->amount = $amount;
      $farmer_transactions->transaction_status = "PENDING";
      $farmer_transactions->items = $items_description;
      $farmer_transactions->paystack_ref  = mb_strtoupper($paystack_ref);
      $refid = session()->put('refid', $farmer_transactions->paystack_ref );

      $farmer_transactions->service_type  = $service_type;
      $farmer_transactions->subscription_title = $subscription_title;
      $farmer_transactions->state = $state;
      $farmer_transactions->lga = $lga;
      $farmer_transactions->subscription_type  = $subscription_type;
      $farmer_transactions->building_specification = $building_specification;
      $farmer_transactions->notes  = $notes;


          $togclusteremail = "@tog.ng";
          $userstate = strtolower($state);
          $togcc = $userstate. '' .$togclusteremail;
         $farmer_transactions->save();
         Mail::to(Auth::user()->email)->cc([$togcc,'info@tog.ng'])->send(new Invoice($farmer_transactions));
         if ($farmer_transactions) {

         return view('userdashboard.paynow', ['data'=> $amount, 'refid' => mb_strtoupper($paystack_ref)]);

   }




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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\farmer_transactions  $farmer_transactions
     * @return \Illuminate\Http\Response
     */
    // public function show(Request $request)
    // {
    //     //
    //
    //       $data = $request->session()->all();
    //       $farmer_transactions = $request->session()->get('working');
    //     return view('userdashboard.paynow')->with('pdata', 'hdk');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\farmer_transactions  $farmer_transactions
     * @return \Illuminate\Http\Response
     */
    public function edit(farmer_transactions $farmer_transactions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\farmer_transactions  $farmer_transactions
     * @return \Illuminate\Http\Response
     */
    public function update($paystack_ref)
    {
        //
        $refer = Farmer_transactions::where('paystack_ref', $paystack_ref)->first();

      $refer->transaction_status = 'success';
      $refer->save();
      if ($refer) {
        $payment = mb_strtoupper($refer->paystack_ref);
        return redirect()->route('hired_tractors')->with("success" , "Transaction REF ID: $payment Payment Was Successfull");
      }
    }
    public function cancelpayment($paystack_ref)
    {
        //
        $refer = Farmer_transactions::where('paystack_ref', $paystack_ref)->first();

      $refer->transaction_status = 'failed';
      $refer->save();
      if ($refer) {
        $payment = mb_strtoupper($refer->paystack_ref);
        return redirect()->route('hired_tractors')->with("error" , "Transaction REF ID: $payment Payment Failed");
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\farmer_transactions  $farmer_transactions
     * @return \Illuminate\Http\Response
     */
    public function destroy(farmer_transactions $farmer_transactions)
    {
        //
    }
}
