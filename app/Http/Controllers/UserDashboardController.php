<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Customer;
use Datatables;
use DB;
use Validator;
use DateTime;
use Carbon\Carbon;

class UserDashboardController extends Controller
{
    public function index()
    {

        $users = User::all();
        $roles = Role::all();
        $customers = Customer::all();

        return view('userdashboard.index', compact('customers','users','roles'));
    }
}
