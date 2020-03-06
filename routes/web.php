<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




  Route::middleware(['auth:user'])->group(function (){
    Route::get('/home', 'CustomHomeController@index')->name('home');
    Route::get('/home/getLga/{id}', 'CustomHomeController@lga');
    Route::get('/home/getstate/{id}', 'CustomHomeController@stateid');
    Route::get('/home/getstate', 'CustomHomeController@state');
    Route::get('/home/user_profile/{id}/edit', 'CustomHomeController@user_profile');
    Route::get('/home/chanpassword', 'ChangePasswordController@index')->name('changepassword');
    Route::put('/home/changpassword', 'ChangePasswordController@update')->name('change.password');
    Route::post('/home/user_profile_update', 'CustomHomeController@profile_update');
    Route::resource('joincluster', 'ClusterController');


       Route::get('/home/all_request_complain', [
       'uses' => 'CustomHomeController@viewcomplain_request',
       'as' => 'viewallrequest'
        ]);
    Route::get('/home/complain_request/{id}', 'CustomHomeController@complain_request');
    Route::post('/home/complain_request', 'CustomHomeController@complain_request_save')->name('complain_request');


   //  Route::po('/home/togpayment', [
   //     'uses' => 'FarmerTransactionsController@show',
   //     'as' => 'payout'
   // ]);
    Route::get('/home/farmer_hired_tractors', [
       'uses' => 'FarmerTransactionsController@viewhiredtractors',
       'as' => 'hired_tractors'

   ]);
    Route::get('/home/farmer_hired_transaction', [
       'uses' => 'FarmerTransactionsController@agentviewhiredtractors',
       'as' => 'hired_transaction'

   ]);
    Route::get('/home/farmer_hired_tractors_success/{paystack_ref}', [
       'uses' => 'FarmerTransactionsController@update',
       'as' => 'update_transaction'

   ]);
    Route::get('/home/farmer_hired_tractors_failed/{paystack_ref}', [
       'uses' => 'FarmerTransactionsController@cancelpayment',
       'as' => 'cancel_transaction'

   ]);
    Route::get('/home/addfarmers', [
       'uses' => 'AddfarmersController@create',
       'as' => 'createfarmers'

   ]);
    Route::get('/home/addfarmer', [
       'uses' => 'AddfarmersController@index',
       'as' => 'showmyfarmers'

   ]);
    Route::post('/home/addfarmer', [
       'uses' => 'AddfarmersController@store',
       'as' => 'agentsavefarmer'

   ]);

    //Route::resource('addfarmer', 'AddfarmersController');
    Route::get('/home/logout/user', 'CustomHomeController@logoutUser');
    Route::get('/home/changePassword','HomeController@showChangePasswordForm');
    Route::get('/home/farmer_transactions', 'FarmerTransactionsController@addFarmerTractions');
  });

  Route::get('/', 'CustomLoginController@frontpage');
  Route::get('/register/user', 'CustomSignupController@addUser');
  Route::post('login/user', 'CustomLoginController@loginUser');
  Auth::routes();
