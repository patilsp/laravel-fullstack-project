<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Datatables;
use DB;
use Validator;
use DateTime;
use Carbon\Carbon;


class UserController extends Controller
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
        return view('users.index', compact('users','roles'));
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
                $users = User::create($input);
                $success_output = '<div class="alert alert-success">Data Inserted</div>';
            }

            if ($request->get('button_action') == 'update') {
                $input = $request->all();
                $users = User::find($request->get('user_id'));
                $users->update($input);
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
       $data = User::get();
       $roles = Role::get();

       $data = User::select('id','name', 'user_profile','user_role', DB::raw('(CASE WHEN two_step_login = 1  THEN "Enabled" ELSE "Notenabled" END) AS two_step_login'))
       ->get();

        $formattedData = $data->map(function ($data) {
            $dateCreated = new DateTime($data->created_at);
            $dateUpdated = new DateTime($data->updated_at);
            $formattedDate = $dateCreated->format('d M Y, h:i a');
            $formattedUpdatedDate = $dateUpdated->format('d M Y, h:i a');
            $data->formatted_created_at = $formattedDate;
            $data->formatted_updated_at = $formattedUpdatedDate;            
            return $data;
        });

        return Datatables::of($data)->addColumn('action', function ($data) {
            return '<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto edit" id="' . $data->id . '"><i class="bi bi-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-icon btn-active-light-danger w-30px h-30px ms-auto delete" id="' . $data->id . '"><i class="bi bi-trash"></i></a>';
        })->make(true);
    }

    public function getdata(Request $request) {
        $id = $request->input('id');
        $output = User::find($id);
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
        User::find($id)->delete();
        echo 'Data Deleted';
    }
}
