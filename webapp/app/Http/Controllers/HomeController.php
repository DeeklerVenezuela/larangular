<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        /*App base roles
            * -Employee
            * -Manager
        */

        $request->user()->authorizeRoles(['employee', 'manager']); //Use to verify array of roles
        // $request->user()->authorizeRoles('manager'); Use it to verify single role
        return view('home');
    }
}
