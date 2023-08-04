<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Datatables;
use DB;
use Validator;
use App\ProcessType;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roles = Role::all();
        return view('roles.index', compact('roles'));
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
                $roles = Role::create($input);
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }

            if ($request->get('button_action') == 'update') {
                $input = $request->all();
                $roles = Role::find($request->get('role_id'));
                $roles->update($input);
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


    public function getall(Request $request) {
       $id = $request->input('id');
       $data = Role::get();
        return Datatables::of($data)->addColumn('action', function ($data) {
            return '<a href="#" class="btn btn-info edit" id="' . $data->id . '"><i class="bi bi-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-danger delete" id="' . $data->id . '"><i class="bi bi-trash"></i></a>';
        })->make(true);
    }

    public function getdata(Request $request) {
        $id = $request->input('id');
        $output = Role::find($id);
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
        Role::find($id)->delete();
        echo 'Data Deleted';
    }
}
