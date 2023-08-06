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


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        $roles = Role::all();
        $customers = Customer::all();

        return view('customers.index', compact('customers','users','roles'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = Validator::make($request->all(), [            
            'name' => 'required',
            'email' => 'required',
        ]);

        $error_array = array();
        $success_output = '';
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
            }
        } else {
            if ($request->get('button_action') == 'insert') {
                $input = $request->all();
                $customers = Customer::create($input);
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }

            if ($request->get('button_action') == 'update') {
                $input = $request->all();
                $customers = Customer::find($request->get('customer_id'));
                $customers->update($input);
                $success_output = '<div class="alert alert-success">Data Updated</div>';

            }

            

        }

        $output = array(
            'error' => $error_array,
            'success' => $success_output,
        );
        echo json_encode($output);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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


    public function getall(Request $request)
    {
        $id = $request->input('id');
        $data = Customer::select('customer_id','name','email', 'phone', 'company', 'address_line1', 'address_line2', 'created_at');
    
        return Datatables::of($data)->addColumn('checkbox', function ($data) {
            return '<input type="checkbox" name="customer_ids[]" value="' . $data->customer_id . '">';
        })->addColumn('action', function ($data) {
            return '<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto edit" id="' . $data->customer_id . '"><i class="bi bi-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-icon btn-active-light-danger w-30px h-30px ms-auto delete" id="' . $data->customer_id . '"><i class="bi bi-trash"></i></a>';
        })->editColumn('created_at', function ($data) {
            $carbonDate = Carbon::parse($data->created_at);
            return $carbonDate->format('d M Y, g:i a'); 
        })->make(true);
    }
    
    public function getdata(Request $request) {
        $id = $request->input('id');
        $output = Customer::find($id);
        echo json_encode($output);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $id = $request->input('id');
        Customer::find($id)->delete();
        echo 'Data Deleted';
    }
}
