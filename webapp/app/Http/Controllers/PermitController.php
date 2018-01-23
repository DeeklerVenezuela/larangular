<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\PermitResource;
use App\Permit;
use Illuminate\Support\Facades\DB;

class PermitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request){
        /* Verify valid role */
        $request->user()->authorizeRoles(['employee', 'manager']); //Use to verify array of roles
        return view('permits_list');
    }

    public function getAll(Request $request){
        $request->user()->authorizeRoles(['employee', 'manager']); //Use to verify array of roles
        return DB::table('permits')->paginate(30);
    }
}
