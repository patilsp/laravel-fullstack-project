<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Datatables;
use DB;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Validator;
use App\Customer;
use App\Project;
use Carbon\Carbon;
use Excel;
use DateTime;

class UserController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$users = User::orderBy('id', 'ASC')
						->where('deleted','!=',1)
						->get();
        $projects = Project::all();		
		$customers = Customer::all();
		$projects = Project::all();
		$roles = Role::all();
		return view('users.index', compact('users', 'roles',  'locations', 'customers','projects','starters'));
	}

	public function oldindex(Request $request) {

		// $data = User::orderBy('id', 'DESC')->paginate(5);

		// return view('users1.index', compact('data'))
		// 	->with('i', ($request->input('page', 1) - 1) * 5);

		$data = User::orderBy('id', 'DESC')->where('deleted','!=',1)->paginate(5000);

		return view('users1.index', compact('data'))
			->with('i', ($request->input('page', 1) - 1) * 5);

	}

	public function getalldata(Request $request) {

		$data = User::join('model_has_roles','users.id','=','model_has_roles.model_id')
		->join('roles','model_has_roles.role_id','=','roles.id')->select('users.*','roles.name as rolename','users.id as uid',DB::raw("CONCAT(firstname,' ',lastname,' - ',employee_id) AS name"))->orderBy('users.id', 'DESC')->where('users.deleted','!=',1)->get();
		foreach($data as $key => $value) {
			$data[$key]['rolename'] = $value->rolename;
		}

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


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$customers = Customer::where('customer_status', '=', 1)->get();
		$vendors = Vendor::all();
		$roles = Role::pluck('name', 'name')->all();
		$processtypes = ProcessType::all();
		$users = DB::table('skills')
		->leftjoin('users', 'skills.user_id', '=', 'users.id')
		->leftjoin('roles', 'skills.role_id', '=', 'roles.id')
		->select('users.id', 'users.firstname as firstname', 'users.lastname as lastname', 'users.employee_id as employee_id')
		->where('skills.role_id', '>', 2)
		->orderBy('skills.id', 'desc')
		->get();
		$accountManager = DB::table('skills')
		->leftjoin('users', 'skills.user_id', '=', 'users.id')
		->leftjoin('roles', 'skills.role_id', '=', 'roles.id')
		->select('users.id', 'users.firstname as firstname', 'users.lastname as lastname', 'users.employee_id as employee_id')
		->where('skills.role_id', '>', 4)
		->orderBy('skills.id', 'desc')
		->get();

		return view('users1.create', compact('users','roles','customers','vendors','accountManager','processtypes'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	// public function store(Request $request) {
	// 	$this->validate($request, [
	// 		'firstname' => 'required',
	// 		'lastname' => 'required',
	// 		'email' => 'required|email|unique:users,email',
	// 		'password' => 'required|same:confirm-password|min:8|regex:/^(?=.*?[0-9])(?=.*?[a-zA-Z])(?=.*?[@&!#?%^*]).{8,50}$/',
	// 	]);

	// 	if ($request->hourly_wage != '') {
	// 		$this->validate($request, [
	// 			'hourly_wage' => 'numeric',
	// 		]);
	// 	}

	// 	$input = $request->all();
	// 	if ($request->hourly_wage != '') {
	// 		$input['hourly_wage'] = $request->hourly_wage;
	// 	}
	// 	$input['password'] = Hash::make($input['password']);
	// 	$user = User::create($input);
	// 	$user->assignRole($request->input('roles'));

	// 	return redirect()->route('users.index')
	// 		->with('success', 'User created successfully');
	// }

	public function store(Request $request)
    {

		$validation = Validator::make($request->all(), [ 
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|same:confirm-password|min:8|regex:/^(?=.*?[0-9])(?=.*?[a-zA-Z])(?=.*?[@&!#?%^*]).{8,50}$/',
		]);

		dd($request);
		
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

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */

	public function changepassword(Request $request) {
		$userinfo = Auth::user();
		$error_array = array();
		$success_output = '';
		$validation = Validator::make($request->all(), [
			'old-password' => 'required',
			'password' => 'same:confirm-password|required|min:8|regex:/^(?=.*?[0-9])(?=.*?[a-zA-Z])(?=.*?[@&!#?%^*]).{8,50}$/',
		]);

		if ($validation->fails()) {
			foreach ($validation->messages()->getMessages() as $field_name => $messages) {
				$error_array[] = $messages;
				
			}
		} else {

			$input = $request->all();
			$password = $input['password'];
			if (!empty($input['password'])) {
				$input['password'] = Hash::make($input['password']);
			} else {
				$input = array_except($input, array('password'));
			}

			$user = User::find($userinfo->id);
			if (!Hash::check($input['old-password'], $user->password)) {

				$error_array[] = 'The specified password does not match the database password';
			} 

		}

		$output = array(
			'error' => $error_array,
			'success' => $success_output,
		);
		echo json_encode($output);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$this->validate($request, [
			'firstname' => 'required',
			'lastname' => 'required',
			'email' => 'required|email|unique:users,email,' . $id,
			//'password' => 'same:confirm-password|min:8|regex:/^(?=.*?[0-9])(?=.*?[a-zA-Z])(?=.*?[@&!#?%^*]).{8,50}$/',
			'roles' => 'required',
		]);
		if ($request->hourly_wage != '') {
			$this->validate($request, [
				'hourly_wage' => 'numeric',
			]);
		}
		$input = $request->all();

		if (!empty($input['password'])) {
			$this->validate($request, [				
				'password' => 'same:confirm-password|min:8|regex:/^(?=.*?[0-9])(?=.*?[a-zA-Z])(?=.*?[@&!#?%^*]).{8,50}$/',
			]);
			$input['password'] = Hash::make($input['password']);
			$edit_password = 1;
		} else {
			$input = array_except($input, array('password'));
			$edit_password = 0;
		}
		if ($request->hourly_wage != '') {
			$input["hourly_wage"] = $request->hourly_wage;
		}
		if ($edit_password == 1) {
			$password_history = DB::table("password_history")->where("user_id",$id)
							    ->select("password","created_on")
								->orderBy("id","desc")
								->limit(5)
								->get()
								->toArray();
			if (count($password_history) >= 5) {
				$first_id = DB::table("password_history")
							->where("user_id",$id)
							->select("id")
							->orderBy("id","asc")
							->first();
				$firstId = $first_id->id;
				$delete = DB::table("password_history")->where("id",$firstId)
									  ->delete();
							
				}
			$update = User::where("id",$id)->update(array("password_reset" => '0'));
			$insert = DB::table("password_history")->insert(['user_id' => $id,'password' => $input['password']]);
		}

		$user = User::find($id);
		$user->update($input);
		DB::table('model_has_roles')->where('model_id', $id)->delete();

		$user->assignRole($request->input('roles'));

		return redirect()->route('users1.index')
			->with('success', 'User updated successfully');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */

	public function skills(Request $request) {
		$id = $request->input('id');
		// $response =  User::find($id)->skills;

		$data = DB::table('skills')
			->leftjoin('users', 'skills.user_id', '=', 'users.id')
			->leftjoin('roles', 'skills.role_id', '=', 'roles.id')
			->leftjoin('levels', 'skills.level_id', '=', 'levels.level')
			->leftjoin('process_types', 'skills.process_type_id', '=', 'process_types.id')
			->select('skills.id', 'roles.name as role_name', 'process_types.type as process_name', 'skills.level_id as level_name', DB::raw('(CASE WHEN trainee = "1" THEN "Yes" ELSE "No" END) AS trainee'), 'skills.percentage_qc as percentage_qc', DB::raw('(CASE WHEN dynamic_capability = "1" THEN "Yes" ELSE "No" END) AS dynamic_capability'))
			->where('skills.user_id', '=', $id)
			->orderBy('skills.id', 'desc')
			->get();

 	
		// return Datatables::of($data)->addColumn('action', function($data){
		//         return '<a href="#" class="btn btn-xs btn-primary edit" id="'.$data->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="#" class="btn btn-xs btn-danger delete" id="'.$data->id.'"><i class="glyphicon glyphicon-remove"></i> Delete</a>';
		//     })->make(true);

		return Datatables::of($data)->addColumn('action', function ($data) {
			return '<a href="#" class="btn-md edit" id="' . $data->id . '"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;<a href="#" class="btn-md delete" id="' . $data->id . '"><i class="glyphicon glyphicon-remove"></i></a>';
		})->make(true);

		//return Datatables::of($response)->make(true);

	}

	// public function getall(Request $request) {
	// 	$users = User::select(DB::raw("CONCAT(firstname,' ',lastname,' - ',employee_id) AS name"), 'id')->pluck('name', 'id');
	// 	return response()->json($users);
	// }

    public function getall(Request $request) {

        $id = $request->input('id');
        $data = User::get();
        $roles = Role::get();
 
        
         $data = User::join('model_has_roles','users.id','=','model_has_roles.model_id')
         ->join('roles','model_has_roles.role_id','=','roles.id')->select('users.*', 'users.profile_image as profileImage', 'roles.name as rolename','users.id as uid', DB::raw("CONCAT(firstname,' ',lastname) AS name"), DB::raw('CONCAT("#EMP", users.id) AS employee_id'))->orderBy('users.id', 'DESC')->where('users.deleted','!=',1)->get();

	       
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
			return '<a href="' . route('userprofile.index') . '" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto edit" id="' . $data->id . '"><i class="bi bi-pencil"></i></a>
			&nbsp;&nbsp;<a href="#" class="btn btn-icon btn-active-light-danger w-30px h-30px ms-auto delete" id="' . $data->id . '"><i class="bi bi-trash"></i></a>';
		})->make(true);
		
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

	// function getusersskills()
	// {
	//  $users = User::select('firstname', 'lastname');
	// // dd($users);
	//  return Datatables::of($users)->make(true);
	// }

	public function resetSession(Request $request) {
		$users = User::where('deleted','!=',1)
				 ->where('session_id','!=','')
				 ->select("id","firstname","lastname","email","employee_id","session_id")
				 ->paginate(5000);
		$data["users"] = $users;
		return view('users.resetsession',$data);
	}

	public function removeSession(Request $request) {
		$user_id = $request->id;
		$update = User::where("id",$user_id)
				  ->update(array("session_id" => ''));
		return back()->with("success","Session reset successfully");
	}
	public function getProject(Request $request) {
		$output = $request->output;
		$user_id = $request->user_id;
		$projects = [];
		if (!empty($output)) {
			$projects = DB::table("processes")
						->whereIn("customer_id",$output)
						->select("id","customer_assigned_name")
						->get()
						->toArray();
		}
		$selectedprojs = Skill::where("user_id",$user_id)
						 ->select("customer_project_lock")
						 ->first();
		$data["projects"] = $projects;
		$data["selectedprojs"] = $selectedprojs;
		
		return json_encode($data);
	}

	public function checkuserlogin(Request $Request){

		$user = Auth::user();

		$update = User::where("id",$user->id)->update(array("check_user_login" => '1'));


	}

	public function checkuserlogout(Request $request)
    {
        $user = Auth::user();

		$update = User::where("id",$user->id)->update(array("check_user_login" => '0'));
    }
	
	public function checkemplogin(Request $request){		
		
		$user = Auth::user();
		$currentdate =  Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s');
		$update = User::where("id",$user->id)->update(array("emp_accept_terms" => $request->emp_accept_terms, "emp_accept_date" => $currentdate));
		$output = 'success';
		return response()->json($output);
	}

	public function importExcel(Request $request) {

		// $this->customer_id = $request->get('customer_id_import');
		// $this->process_id = $request->get('process_id_import');

		$results = [];
		if ($request->hasFile('import_file')) {
			$uploaded_name = $_FILES[ 'import_file' ][ 'name' ];
        	$uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1);
        	if (strtolower( $uploaded_ext ) == 'xls' || strtolower( $uploaded_ext ) == 'xlsx') {
				Excel::load($request->file('import_file')->getRealPath(), function ($reader) {
					foreach ($reader->toArray() as $key => $row) {
						$supervisor =0;
						$account_manager =0;
						$validation = Validator::make($row, [
							'employee' => 'required'
						]);
						$row['account_manager'] = strtoupper($row['account_manager']);
						$row['supervisor'] = strtoupper($row['supervisor']);
						$row['employee'] = strtoupper($row['employee']);
						$data =["employee"=>$row['employee'],
						"account_manager"=>$row['account_manager'],
						"supervisor"=>$row['supervisor']];						

							if(!isset($row['employee'])){
								$data['status']	="<div class='text-danger'>Employee Required.</div>";
							}else{
								$userExist = User::where('employee_id',$row['employee'])->where('deleted','!=',1)->where(function($q){
									$q->where('users.vendor_id', '=', '')
									->orWhereNull('users.vendor_id');
								})->first();
								
								if(!isset($userExist->id)){
									$data['status']	="<div class='text-danger'>Inavlid Employee.</div>";
								}

								if((isset($row['supervisor'])&&$row['employee']==$row['supervisor'])||(isset($row['account_manager'])&&$row['employee']==$row['account_manager']) ){
									$data['status']	="<div class='text-danger'>Employee can't map himself.</div>";
								}

							}
							// if(!isset($row['account_manager']) ){
							// 	$status = isset($data['status'])?$data['status'].'</br>':'';
							// 	$data['status']	=$status."Account Manager Required.";
							// }							
							// if(!isset($row['supervisor'])){
							// 	$status = isset($data['status'])?$data['status'].'</br>':'';
							// 	$data['status']	=$status."supervisor Required.";
							// }														
							if((isset($row['account_manager']) && !is_null($row['account_manager']))||(isset($row['supervisor']) && !is_null($row['supervisor'])) ){
								$employees =[];
								if(!is_null($row['account_manager'])){
									$employees[]= $row['account_manager'];
								}
								if(!is_null($row['supervisor'])){
									$employees[]= $row['supervisor'];
								}								
								// $users = DB::table('skills')
								// ->leftjoin('users', 'skills.user_id', '=', 'users.id')
								// ->leftjoin('roles', 'skills.role_id', '=', 'roles.id')
								// ->select('users.id','users.employee_id', DB::raw('MAX(roles.id) as roleid'))
								// //->where('roles.employee_role', '=', 2)
								// ->where('skills.role_id', '>', 2)
								// ->whereIn('users.employee_id',$employees)
								// ->where('users.deleted','!=',1)
								// ->groupBy('users.id','users.employee_id')
								// ->orderBy('users.id', 'desc')
								// ->get();
								$users = DB::table('users')
								->select('users.id','users.employee_id')
								//->where('roles.employee_role', '=', 2)
								->whereIn('users.employee_id',$employees)
								->where('users.deleted','!=',1)
								->groupBy('users.id','users.employee_id')
								->orderBy('users.id', 'desc')
								->get();								
								
								$index =1;


								foreach($users as $user){
									if(!is_null($row['account_manager'])){
										
										if(strtoupper($user->employee_id)!=$row['account_manager'] && $account_manager==0){
											if(count($users)==$index){
												$status = isset($data['status'])?$data['status'].'</br>':'';
												$data['status'] =$status."<div class='text-danger'> Inavlid Account Manager.</div>";
											}
											
										}elseif(strtoupper($user->employee_id)==$row['account_manager']){
											
											if(isset($user->id)){
											$account_manager = $user->id;
											}else{
												$account_manager =0;
											}
											
										}
										
									}
									if(!is_null($row['supervisor'])){
										if(strtoupper($user->employee_id)!=$row['supervisor']&&$supervisor==0){
											if(count($users)==$index){
												$status = isset($data['status'])?$data['status'].'</br>':'';
												$data['status'] =	$status. "<div class='text-danger'>  Inavlid Supervisor.</div>";
											}
										}else if(strtoupper($user->employee_id)==$row['supervisor']){
											if(isset($user->id)){
											$supervisor = $user->id;
											}else{
												$supervisor=0;
											}
										}
									}
									$index++;
								}

								}
								
								if(isset($row['account_manager'])&&!is_null($row['account_manager'])&&$account_manager==0){
									

									$status = isset($data['status'])?$data['status'].'</br>':'';
									if(!isset($data['status']) || strpos($data['status'],' Inavlid Account Manager.') == false){
									$data['status'] =$status. "<div class='text-danger'> Inavlid Account Manager.</div>";
									}
								}else if(isset($row['account_manager'])&&is_null($row['account_manager'])){
									$account_manager =0;
								}									

								if(isset($row['supervisor'])&&!is_null($row['supervisor'])&&$supervisor==0){
									$status = isset($data['status'])?$data['status'].'</br>':'';
									if(!isset($data['status']) ||strpos($data['status'],'  Inavlid Supervisor.') == false){
									$data['status'] = $status."<div class='text-danger'>  Inavlid Supervisor.</div>";
									}
								}else if(isset($row['supervisor'])&&is_null($row['supervisor'])){
									$supervisor =0;
								}

						
								if(!isset($data['status'])){
									//$supervisor =isset($row['supervisor'])?$row['supervisor']:0;
									//$account_manager = isset($row['account_manager'])?$row['account_manager']:0;
									User::where('employee_id',$row['employee'])->update(array('supervisor_id'=>$supervisor,'manager_id'=>$account_manager));
									$data['status'] = "<div class='text-success'>Success</div>";
								}

							$this->importedStatus[] = $data;
					}
				});
			}else {
				$data['status'] = "<div class='text-danger'>File type not supported</div>";
				$this->importedStatus[] = $data;
			}
		}

		
		return json_encode($this->importedStatus);

		
	}	

	public function employeeindex() {
		$users = DB::table('skills')
		->leftjoin('users', 'skills.user_id', '=', 'users.id')
		->leftjoin('roles', 'skills.role_id', '=', 'roles.id')
		->select('users.id', 'users.firstname as firstname', 'users.lastname as lastname', 'users.employee_id as employee_id')
		//->where('roles.employee_role', '=', 2)
		->where('skills.role_id', '>', 2)
		//->where('skills.role_id', '=', 17)
		->orderBy('users.firstname', 'asc')
		->where('users.deleted','!=',1)
		->groupBy('users.id','users.firstname','users.lastname','users.employee_id')
		->get();
		$accountManager = DB::table('skills')
		->leftjoin('users', 'skills.user_id', '=', 'users.id')
		->leftjoin('roles', 'skills.role_id', '=', 'roles.id')
		->select('users.id', 'users.firstname as firstname', 'users.lastname as lastname', 'users.employee_id as employee_id')
		//->where('skills.role_id', '=', 12)
		//->where('roles.employee_role', '=', 1)
		->where('users.deleted','!=',1)
		->groupBy('users.id','users.firstname','users.lastname','users.employee_id')
		->where('skills.role_id', '>', 4)
		->orderBy('users.firstname', 'asc')
		->get();		
		$employees = DB::table('users')
		->select('users.id', 'users.firstname as firstname', 'users.lastname as lastname', 'users.employee_id as employee_id')
		//->where('skills.role_id', '=', 12)
		//->where('roles.employee_role', '=', 1)
		->where('users.deleted','!=',1)
		->where(function($q){
			$q->where('users.vendor_id','=','')->orWhereNull('users.vendor_id');
		})
			
		->groupBy('users.id','users.firstname','users.lastname','users.employee_id')
		->orderBy('users.firstname', 'asc')
		->get();				
		return view('employee.index', compact('users','accountManager','employees'));
			
	}

	public function getEmployee(Request $request){
		if(!isset($request->is_new)){
			$users = DB::table('users as users1')->leftjoin('users AS users2','users2.id','users1.supervisor_id')
			->leftjoin('users AS users3','users3.id','users1.manager_id')
			->select(DB::raw("CONCAT(COALESCE(users1.firstname,''),' ',COALESCE(users1.lastname,''),' - ',users1.employee_id) AS name"),DB::raw('CONCAT(COALESCE(users2.firstname,"")," ",COALESCE(users2.lastname,"")," - ",users2.employee_id) AS supervisor'),DB::raw("CONCAT(COALESCE(users3.firstname,' '),' ',COALESCE(users3.lastname,' '),' - ',users3.employee_id) AS account_manager"),'users1.id as employee_id','users1.supervisor_id as current_supervisor_id','users1.manager_id as current_manager_id')
			->where(function($q){
				$q->where('users1.vendor_id', '=', '')
				->orWhereNull('users1.vendor_id');
			});
	
			if(!is_null($request->employee_id)){
				$users->where('users1.id',$request->employee_id);
			}		
			if(!is_null($request->supervisor_id)){
				$users->where('users1.supervisor_id',$request->supervisor_id);
			}
			if(!is_null($request->manager_id)){
				$users->where('users1.manager_id',$request->manager_id);
			}		
			$users=$users->where('users1.deleted','!=',1)->get();
		}else{
			$users = DB::table('skills')
			->where('deleted','!=',1)
			->leftjoin('users', 'skills.user_id', '=', 'users.id')
			->leftjoin('roles', 'skills.role_id', '=', 'roles.id')
			->select('users.id', DB::raw("CONCAT(firstname,' ',lastname,' - ',employee_id) AS name"))
			//->where('roles.employee_role', '=', 1)
			->where('skills.role_id', '>', 4)
			//->where('skills.role_id', '=', 17)
			->orderBy('users.firstname', 'asc')
			->pluck('name', 'id');

		}
		return response()->json($users);

	}

	public function getallemployee(Request $request){
		
		$data = DB::table('users as users1')->leftjoin('users AS users2','users2.id','users1.supervisor_id')
		->leftjoin('users AS users3','users3.id','users1.manager_id')
		->select(DB::raw("CONCAT(users1.employee_id,' - ',COALESCE(users1.firstname,''),' ',COALESCE(users1.lastname,'')) AS name"),DB::raw('CONCAT(users2.employee_id," - ",COALESCE(users2.firstname,"")," ",COALESCE(users2.lastname,"")) AS supervisor'),DB::raw("CONCAT(users3.employee_id,' - ',COALESCE(users3.firstname,' '),' ',COALESCE(users3.lastname,'')) AS account_manager"),'users1.*')
		->where(function($q){
			$q->where('users1.vendor_id', '=', '')
			->orWhereNull('users1.vendor_id');
		});

		if(!is_null($request->employee_id)){
			$data->where('users1.id',$request->employee_id);
		}		
		if(!is_null($request->supervisor_id)){
			$data->where('users1.supervisor_id',$request->supervisor_id);
		}
		if(!is_null($request->manager_id)){
			$data->where('users1.manager_id',$request->manager_id);
		}		
		$data->where('users1.deleted','!=',1)
		
		->get();
		$keyword = $request->input('search.value');;
		
		return Datatables::of($data)
		->filterColumn('name',function($query,$keyword) {
			
				$query->where(function($q) use($keyword) {
						
						//$q->where('users', function($q) use ($keyword) {
								$q->whereRaw("CONCAT(users1.firstname,' ',users1.lastname,' - ',users1.employee_id) like ?", ["%{$keyword}%"])
								->orWhereRaw("CONCAT(users2.firstname,' ',users2.lastname,' - ',users2.employee_id) like ?", ["%{$keyword}%"])
								->orWhereRaw("CONCAT(users3.firstname,' ',users3.lastname,' - ',users3.employee_id) like ?", ["%{$keyword}%"]);
						//	});
						});
			
		})
		->addColumn('action', function ($data) {
			return '<a href="#" class="btn-md edit" data-attrname="'.$data->name.'" id="'. $data->id .'" data-supervisorid="'.$data->supervisor_id.'" data-managerid="'.$data->manager_id.'"><i class="glyphicon glyphicon-edit"></i></a>';
		})->make(true);

	}

	public function employeeupdate(Request $request){
		User::where('id',$request->input('id'))->update(array('supervisor_id'=>$request->input('supervisor_id'),'manager_id'=>$request->input('manager_id')));
		$status = array("status"=>"success");
		return response()->json($status);		
		
	}

	public function proofofinvestment(Request $request) {
		$category = DB::table('employee_document_category')
			->select('id', 'name')
			->where('display', '=',1)
			->get();

		return view('investment.proofofinvestment', compact('category'));
	}
	
}
