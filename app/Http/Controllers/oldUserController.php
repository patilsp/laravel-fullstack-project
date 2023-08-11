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
               
            }

            if ($request->get('button_action') == 'update') {
                $input = $request->all();
                
                $users = User::find($request->get('user_id'));
                $users->update($input);

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

       
		$data = User::join('model_has_roles','users.id','=','model_has_roles.model_id')
		->join('roles','model_has_roles.role_id','=','roles.id')->select('users.*','roles.name as rolename','users.id as uid' )->orderBy('users.id', 'DESC')->where('users.deleted','!=',1)->get();
		foreach($data as $key => $value) {
			$data[$key]['rolename'] = $value->rolename;
		}

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

    public function getusersbyrole(Request $request) {
		$role_id = $request->input('role_id');
		if ($role_id > 0) {
			$users = User::role(Role::find($role_id)->name)
				->select('id', DB::raw('CONCAT(employee_id," - ",firstname," ", lastname) AS name'))
				->where('deleted','!=',1)
				->pluck('name', 'id');
			
		}

		if ($role_id == "all") {
			$user = Auth::user();
			
			$hierarchy = $user->roles->pluck('hierarchy')->first();
			$hierarchy = $hierarchy + 1;
			$roles = Role::where('hierarchy', '<=', $hierarchy)->orderBy('hierarchy', 'desc')->limit(6)->get();
			 
			foreach ($roles as $role) {	
				$this->roleids[] = $role->id;
			}

		 
			$users = User::whereHas("roles", function($q){ $q->whereIn("id", $this->roleids); })
				->select('id', DB::raw('CONCAT(employee_id," - ",firstname," ", lastname) AS name'))
			 	->pluck('name', 'id');

		}

		return response()->json($users);

	}
}
