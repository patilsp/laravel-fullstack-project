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
}
