<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Customer;
use App\Ticket;
use Datatables;
use DB;
use Validator;
use DateTime;
use Carbon\Carbon;


class TicketController extends Controller
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
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets','customers','users','roles'));
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
            'title' => 'required',
            'status' => 'required',
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
                $tickets = Ticket::create($input);
               
            }

            if ($request->get('button_action') == 'update') {
                $input = $request->all();
                $tickets = Ticket::find($request->get('ticket_id'));
                $tickets->update($input);
                
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
        // $data = Ticket::select('id','title','description', 'status', 'created_at');

        $data = DB::table('tickets')
        ->leftjoin('users', 'tickets.user_id', '=', 'users.id')
        ->leftjoin('projects', 'tickets.project_id', '=', 'projects.id')       
        ->leftjoin('ticket_status', 'tickets.status_id', '=', 'ticket_status.id')       
        ->select('tickets.id', 'tickets.title','tickets.description', 'tickets.created_at','ticket_status.name as status_name')
        // ->where('tickets.user_id', '=', $id)
        ->orderBy('tickets.id', 'desc')
        ->get();


    
        return Datatables::of($data)->addColumn('checkbox', function ($data) {
            return '<input type="checkbox" name="Ticket_ids[]" value="' . $data->id . '">';
        })->addColumn('action', function ($data) {
            return '<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto edit" id="' . $data->id . '"><i class="bi bi-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-icon btn-active-light-danger w-30px h-30px ms-auto delete" id="' . $data->id . '"><i class="bi bi-trash"></i></a>';
        })->editColumn('created_at', function ($data) {
            $carbonDate = Carbon::parse($data->created_at);
            return $carbonDate->format('d M Y, g:i a'); 
        })->make(true);
    }
    
    public function getdata(Request $request) {
        $id = $request->input('id');
        $output = Ticket::find($id);
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
        Ticket::find($id)->delete();
        echo 'Data Deleted';
    }

    public function gettasks(Request $request) {
		$user = Auth::user();

		$from_date = $request->from_date;
		$to_date = $request->to_date;
		$assigned_to = $request->assigned_to;
		$role_id = $request->role_id;
		$taskstatusid = $request->taskstatusid;

		$data = TaskAssign::join('status_common', 'task_assign.task_status', '=', 'status_common.status_id')
			->join('users as createduser', 'task_assign.opened_by', '=', 'createduser.id')
			->join('users as assignuser', 'task_assign.assigned_to', '=', 'assignuser.id')
			->select('task_assign.id', 'task_name', 'open_date', DB::raw('CONCAT(createduser.firstname, " ", createduser.lastname) AS opened_by_name'), 'due_date', 'task_comments', DB::raw('CONCAT(assignuser.firstname, " ", assignuser.lastname) AS assigned_to_name'), 'status_common.status_name as task_status_name')
			->where('status_common.category', '=', 'taskassign')
			->where('createduser.id', '=', $user->id);

		if ($from_date != "" && $to_date != "") {
			$from_date = Carbon::parse($from_date)->format('Y-m-d H:i:s');
			$to_date = Carbon::parse($to_date)->format('Y-m-d H:i:s');
			$data->whereBetween('task_assign.created_at', array($from_date, $to_date));
		}

		if ($assigned_to > 0) {
			$data->where('task_assign.assigned_to', '=', $assigned_to);
		}

		if ($taskstatusid >= 0 && $taskstatusid != "") {
			$data->where('task_assign.task_status', '=', $taskstatusid);
		}

		$data->get();

		// $data = DB::table('tax_source')
		//     ->join('county', 'tax_source.county_id', '=', 'county.id')
		//     ->join('state', 'county.state_id', '=', 'state.id')
		//     ->select('tax_source.id', 'state.name as state', 'county.name as county', 'tax_source.web_link as source')
		//     ->where([['tax_source.county_id', '=', $county_id], ['county.state_id', '=', $state_id]])
		//     ->orderBy('tax_source.id', 'desc')
		//     ->get();

		return Datatables::of($data)->addColumn('action', function ($data) {
			return '<a href="#" class="btn-md task-edit" id="' . $data->id . '"><i class="glyphicon glyphicon-edit"></i></a>';
		})->make(true);
	}

	public function gettaskdetails(Request $request) {
		$id = $request->input('id');
		$user = Auth::user();

		$output = TaskAssign::join('status_common as taskstatus', 'task_assign.task_status', '=', 'taskstatus.status_id')
			->join('status_common as taskpriority', 'task_assign.task_priority', '=', 'taskpriority.status_id')
			->join('users as createduser', 'task_assign.opened_by', '=', 'createduser.id')
			->join('users as assignuser', 'task_assign.assigned_to', '=', 'assignuser.id')
			->select('taskpriority.color_code as taskprioritycolor','taskpriority.status_name as taskprioritystatus','task_assign.task_priority as taskpriorityid', 'task_assign.id', 'task_name', 'open_date', DB::raw('CONCAT(createduser.firstname, " ", createduser.lastname) AS opened_by_name'), 'due_date','due_date_org', 'task_comments', DB::raw('CONCAT(assignuser.firstname, " ", assignuser.lastname) AS assigned_to_name'), 'taskstatus.status_name as task_status_name', DB::raw('(CASE WHEN assignuser.id = ' . $user->id . ' THEN 1 ELSE 0 END) as assignuser '))
			->where('taskstatus.category', '=', 'taskassign')
			->where('taskpriority.category', '=', 'taskpriority')
			->where('task_assign.id', '=', $id)

			->first();

		$output['taskdetails'] = TaskAssign::join('task_assign_details', 'task_assign.id', '=', 'task_assign_details.task_assign_id')
			->join('status_common', 'task_assign_details.response_status', '=', 'status_common.status_id')
			->join('users', 'task_assign_details.response_user_id', '=', 'users.id')
			->select('task_assign_details.response', 'task_assign_details.due_date_new','task_assign_details.response_date', 'status_common.status_name as taskdetail_status_name', DB::raw('CONCAT(users.firstname, " ", users.lastname) AS fullname'))
			->where('status_common.category', '=', 'taskassign')
			->where('task_assign.id', '=', $id)
			->get();
		echo json_encode($output);

	}


    
}
