<?php

namespace Backpack\CRUD\app\Http\Controllers;

use Illuminate\Routing\Controller;
use App\User;
class AdminController extends Controller
{
    protected $data = []; // the information we send to the view
    protected $limit = 12;
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {

        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['users'] =  User::latest()->where('user_type',  '1')->orderBy('created_at')->paginate($this->limit);
        $this->data['agents'] =  User::latest()->where('user_type',  '5')->orderBy('created_at')->paginate($this->limit);
        $this->data['operators'] =  User::latest()->where('user_type',  '2')->orderBy('created_at')->paginate($this->limit);
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];


        return view(backpack_view('dashboard'), $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}
