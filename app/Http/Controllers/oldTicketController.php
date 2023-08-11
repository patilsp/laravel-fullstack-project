<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Customer;
use App\Project;
use App\Ticket;
use Datatables;
use DB;
use Auth;
use Validator;
use DateTime;
use Carbon\Carbon;
use App\TicketComments;
use App\TicketNotification;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    //     $users = User::all();
    //     $roles = Role::all();
    //     $customers = Customer::all();
    //     $tickets = Ticket::all();
    //     return view('tickets.index', compact('tickets','customers','users','roles'));
    // }

    public function index(Request $request) {
        $user = Auth::user();

        $users = User::orderBy('name', 'ASC')
						->where('deleted','!=',1)
						->get();

        $roles = Role::orderBy('hierarchy', 'desc')->get();
        $this->userid = $user->id;
        $projects = Project::all();
        $taskpriority = DB::table('status_common')->where('category', '=', 'taskpriority')->get();

        $prorites = DB::table('ticket_priorities')->get();
        $categories = DB::table('ticket_categories')->get();

        $customers = DB::table('tickets_client')->get();
        $restrict[0] = 1;
        $restrict[1] = 3;
        $user_id = $user->id;
        $current_userrole = DB::table("model_has_roles")
                        ->join("roles","roles.id","model_has_roles.role_id")
                        ->where("model_has_roles.model_id",$user_id)
                        ->select("roles.name")
                        ->get();
        $allroles = array();
        foreach ($current_userrole as $key => $value) {
            $user_role = $value->name;
            array_push($allroles, $user_role);
            $current_role = $value;
        }

        $tk_widgets = DB::table("ticket_widgets")
                      ->whereIn("role",$allroles)
                      ->orderBy("sequence")
                      ->get()
                      ->toArray();
        if (empty($tk_widgets)) {
            $tk_widgets = DB::table("ticket_widgets")
                      ->whereNull("role")
                      ->orderBy("sequence")
                      ->get()
                      ->toArray();
        }
        $usertickets = new Ticket;
        foreach ($tk_widgets as $key => $value) {
            $widgets[$value->widget_name]["color_code"] = $value->color_code;
            $widgets[$value->widget_name]["code"] = $value->code;
            if ($value->code == "CL") {
                if($current_role->name == 'IT Project Manager'  || $current_role->name == 'Master') {
                    $usertickets_closed = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'CL' THEN 1 ELSE 0 END) as closedtickets "))
                                // ->where('assigned_to', '!=', $user->id) 
                                ->where("category_id","1")
                                ->first();
                } else {
                    $usertickets_closed = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'CL' THEN 1 ELSE 0 END) as closedtickets "))
                           ->where('assigned_to', '=', $user->id)
                           ->where('status_code', '!=','WA') 
                           ->where('status_code', '!=','TA') 
                           ->first();
                }
                $widgets[$value->widget_name][$value->code] = $usertickets_closed->closedtickets;
            }
            if ($value->code == "YTS") {
                if($current_role->name == 'IT Project Manager'  || $current_role->name == 'Master') {
                    $yettostartticket = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'YS' THEN 1 ELSE 0 END)
                                as yettostartticket "))
                                ->where("category_id","1")
                                ->first();
                }
                $widgets[$value->widget_name][$value->code] = $yettostartticket->yettostartticket;
            }
            if ($value->code == "O") {
                if ($current_role->name == 'Tester') {
                    $usertickets_open = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'TE' or status_code != 'CL' or status_code = 'TES' THEN 1 ELSE 0 END) as opentickets"));
                    $usertickets_open = $usertickets_open->orWhere(function ($q) use ($user_id)  {
                        $q->where('tickets.status_code', '=','TE')
                          ->orwhere('tickets.status_code', '=','TES');
                    });
                    $usertickets_open = $usertickets_open->orWhere(function ($q) use ($user_id)  {
                        $q->where('tickets.status_code', "!=",'CL')
                          ->where('tickets.assigned_to', "=", $user_id);
                    });
                    $usertickets_open = $usertickets_open->first();
                    $widgets[$value->widget_name][$value->code] = $usertickets_open->opentickets;
                } else {
                    $usertickets_open = Ticket::select(DB::raw("SUM(CASE WHEN status_code != 'CL' THEN 1 ELSE 0 END) as opentickets "))
                       ->where('assigned_to', '=', $user->id)
                       ->where('status_code', '!=','WA') 
                       ->where('status_code', '!=','TA') 
                       ->first();
                    $widgets[$value->widget_name][$value->code] = $usertickets_open->opentickets;
                }
            }
            if ($value->code == 'REV') {
                if($current_role->name == 'IT Project Manager'  || $current_role->name == 'Master') {
                    $reviewticket = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'REV' THEN 1 ELSE 0 END)
                                as testtickets "))
                                // ->where("assigned_by",$user->id)
                                ->first();
                } else {
                    $reviewticket = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'REV' THEN 1 ELSE 0 END)
                                as testtickets "))
                                ->where("assigned_by",$user->id)
                                ->first();
                }
                $widgets[$value->widget_name][$value->code] = $reviewticket->testtickets; 
            }
            if ($value->code == 'RE') {
                $reworkticket = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'RE' THEN 1 ELSE 0 END)
                            as reworkticket "))
                            ->where("assigned_to",$user->id)
                            ->first();
                $widgets[$value->widget_name][$value->code] = $reworkticket->reworkticket; 
            }
            if ($value->code == 'IN') {
                $inputticket = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'IN' THEN 1 ELSE 0 END)
                            as inputticket "))
                            ->first();
                $widgets[$value->widget_name][$value->code] = $inputticket->inputticket; 
            }
            if ($value->code == 'CLA') {
                if($current_role->name == 'IT Project Manager' || $current_role->name == 'Master') {
                $claification_ticket = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'CLA' THEN 1 ELSE 0 END) as clarificationtickets "))
                            // ->where("clarification_raised_to",$user->id)
                            ->first(); 
                } else {
                    $claification_ticket = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'CLA' THEN 1 ELSE 0 END) as clarificationtickets "))
                            ->where("clarification_raised_to",$user->id)
                            ->first();
                }
                $widgets[$value->widget_name][$value->code] = $claification_ticket->clarificationtickets; 
            }
            if ($value->code == 'CR') {
                $claification_res = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'CR' THEN 1 ELSE 0 END)
                            as clarifiedtickets "))
                            ->where("clarification_raised_by",$user->id)
                            ->first();
                $widgets[$value->widget_name][$value->code] = $claification_res->clarifiedtickets;
            }
            if ($value->code == 'OO') {
                $othertickets_open = Ticket::select(DB::raw("SUM(CASE WHEN status_code != 'CL' and status_code != 'H' THEN 1 ELSE 0 END) as opentickets "));
                
                // if ($user->hasPermissionTo('Tickets Approval')) {
                    
                //     $othertickets_open = $othertickets_open->where(function($q) {
                //                                 $q->whereNotNull("approver")
                //                                 ->orWhere('tickets.assigned_by', '=',  $this->userid);
                //                             })
                //                         ->where('assigned_to', '!=', $user->id);
                // } 
                
                if($current_role->name == 'IT Project Manager' || $current_role->name == 'Master') {
                   
                    $othertickets_open = $othertickets_open->where("tickets.status_code","AT");
                    $othertickets_open = $othertickets_open->where("category_id","1");
                } else {
                   
                    $othertickets_open = $othertickets_open->where(function($q) {
                                                $q->where('tickets.assigned_by', '=', $this->userid)
                                                ->orWhere('tickets.updated_assigned_by', '=',  $this->userid);
                                            })
                                        ->where('assigned_to', '!=', $user->id);
                }
                    $othertickets_open = $othertickets_open->first();
                    // dd(DB::getQueryLog());
                $widgets[$value->widget_name][$value->code] = $othertickets_open->opentickets;
            }
            if ($value->code == 'OC') {
                if($current_role->name == 'IT Project Manager'  || $current_role->name == 'Master') {
                    $othertickets = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'CL' THEN 1 ELSE 0 END) as closedtickets "))
                                ->where('assigned_to', '!=', $user->id) 
                                ->where("category_id","1")
                                ->first();
                } else {
                    $othertickets = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'CL' THEN 1 ELSE 0 END) as closedtickets "))
                                ->where('assigned_to', '!=', $user->id) 
                                ->where(function($q) {
                                    $q->where('tickets.assigned_by', '=', $this->userid)
                                    ->orWhere('tickets.updated_assigned_by', '=',  $this->userid);
                                })
                                ->first();
                }
                $widgets[$value->widget_name][$value->code] = $othertickets->closedtickets;
            }
            if ($value->code == 'AP') {
                $approve = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'WA' THEN 1 ELSE 0 END) as approvaltickets "));
                
                $approve = $approve->first();
                $widgets[$value->widget_name][$value->code] = $approve->approvaltickets;
            }
            if ($value->code == 'DR') {
                $doccreated = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'DC' THEN 1 ELSE 0 END) as doccreated "))
                              ->where("approver",$user->id);
                $doccreated = $doccreated->first();
                
                $widgets[$value->widget_name][$value->code] = $doccreated->doccreated;
            }
            if ($current_role->name == 'IT Project Manager') {
                if ($value->code == 'DRE') {
                    $design_rework = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'DR' THEN 1 ELSE 0 END)
                                as design_rework "))
                                ->first();
                    $widgets[$value->widget_name][$value->code] = $design_rework->design_rework;
                }
                if ($value->code == 'DAP') {
                    $design_approved = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'DA' THEN 1 ELSE 0 END)
                                as design_approved "))
                                ->first();
                    $widgets[$value->widget_name][$value->code] = $design_approved->design_approved;
                }
            }
            if ($value->code == 'HO') {
                $hold_tickets = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'H' THEN 1 ELSE 0 END)
                                as hold_tickets "))
                                ->first();
                $widgets[$value->widget_name][$value->code] = $hold_tickets->hold_tickets;
            }
            if ($value->code == 'TS') {
                $test_tickets = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'TE' OR status_code = 'TES' THEN 1 ELSE 0 END)
                                as test_tickets "))
                                ->first();
                $widgets[$value->widget_name][$value->code] = $test_tickets->test_tickets;
            }
            if ($value->code == 'A') {
                if (Auth::user()->hasRole('Developer')) {
                    $developer = \DB::table("projects")
                         ->where("developer","!=",NULL)
                         ->select("developer","id")
                         ->get();
                    $client_id = array();
                    foreach ($developer as $k => $val) {
                        $arr = array();
                        $arr = explode(",", $val->developer);
                        if (in_array($user->id, $arr)) {
                            array_push($client_id, $val->id);
                        }
                    }
                    $assgin = Ticket::where("tickets.status_code","TA")
                              ->where("tickets.category_id","1")
                              ->whereIn("tickets.project_id",$client_id)
                              ->select(DB::raw("SUM(CASE WHEN status_code = 'TA' THEN 1 ELSE 0 END) as tobeassigntickets "))
                              ->first();
                    $widgets[$value->widget_name][$value->code] = $assgin->tobeassigntickets;
                } else {
                    if (Auth::user()->hasRole('IT Project Manager') || Auth::user()->hasRole('Master')) {
                        $assgin = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'TA' OR status_code = 'AP' THEN 1 ELSE 0 END) as tobeassigntickets "));
                    
                        $assgin = $assgin->where("category_id","1");
                    }  else {
                        $assgin = Ticket::select(DB::raw("SUM(CASE WHEN status_code = 'AP' THEN 1 ELSE 0 END) as tobeassigntickets "));
                    
                        $assgin = $assgin->where("category_id","!=","1");
                    }
                    $assgin = $assgin->first();
                    $widgets[$value->widget_name][$value->code] = $assgin->tobeassigntickets;
                }
            }

        }

        $status = $request->status;
        $sname = explode("-", $status);
        $statusname = $sname[0];
        $clients = DB::table("projects")
                   ->get();

        
       
        $impacted_task_type = DB::table('impacted_task_type')->get();
        $impacted_customer = DB::table('impacted_customer')->get();
        $impacted_user = DB::table('impacted_user')->get();
        $impacted_orders = DB::table('impacted_orders')->get();

        return view('tickets.index', compact('roles', 'users', 'prorites', 'projects', 'categories', 'status', 'usertickets_open','usertickets_closed','othertickets','othertickets_open','approve','assgin','restrict','statusname','customers','completed_ticket','claification_ticket','claification_res','clients','reviewticket','widgets','user_role','impacted_task_type','impacted_customer','impacted_user','impacted_orders'));
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
    // public function store(Request $request)
    // {

    //     $validation = Validator::make($request->all(), [            
    //         'title' => 'required',
          
    //     ]);

    //     $error_array = array();
    //     $success_output = '';
    //     if ($validation->fails()) {
    //         foreach ($validation->messages()->getMessages() as $field_name => $messages) {
    //             $error_array[] = $messages;
    //         }
    //     } else {
    //         if ($request->get('button_action') == 'insert') {
    //             $input = $request->all();

    //             // dd($input);
    //             $tickets = Ticket::create($input);
               
    //         }

    //         if ($request->get('button_action') == 'update') {
    //             $input = $request->all();
    //             $tickets = Ticket::find($request->get('ticket_id'));
    //             $tickets->update($input);
                
    //         }

            

    //     }

    //     $output = array(
    //         'error' => $error_array,
    //         'success' => $success_output,
    //     );
    //     echo json_encode($output);
       
    // }


       public function store(Request $request) {

  

        if ($request->get('ticketresponse_button_action') == 'insert') {
            $validation = Validator::make($request->all(), [
                // 'response_status' => 'required',
                // 'taskcomments' => 'required',

            ]);
        } else {
            $validation = Validator::make($request->all(), [
                'title' => 'required',
                'category_id' => 'required',

                // 'assigned_to' => 'required',
                // 'priority_id' => 'required',
                // 'description' => 'required',
                // 'due_date' => 'required',
                'filename.*' => 'mimes:jpeg,png,xls,xlsx,pdf,doc,docx,jpg,txt,ppt,pptx',
            ]);
        }
        $error_array = array();
        $success_output = '';
        $user = Auth::user();
        $response_array = array();
        if ($validation->fails()) {
            foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                $error_array[] = $messages;
                //$error_array[] = $field_name;
            }
        } elseif ($request->get('button_action') == 'insert') {
            if (isset($request->project)) {
                $project = trim($request->project,'"');
            } else {
                $project = NULL;
            }

            // if (isset($request->classification)) {
            //  $classification = $request->classification;
            //  $priority = '4';
            // } else {
            //  $classification = NULL;
            //  $priority = $request->priority_id;
            // }
            $duedate = Carbon::parse($request->due_date." 23:59:59")->format('Y-m-d H:i:s');
            if (isset($request->ticket_type) && $user->hasPermissionTo('Tickets Approval')) {
                $ticket_type = $request->ticket_type;
                $order_type = $request->order_type;
                $customer_type = $request->customer_type;
                $user_type = $request->user_type;
                $priority_level = DB::table("ticket_impacted_logic")
                            ->where("type",$ticket_type)
                            ->where("impacted_order",$order_type)
                            ->where("impacted_customer",$customer_type)
                            ->where("impacted_user",$user_type)
                            ->select("priority_level","tat")
                            ->first();
                if($priority_level) {
                    $priority = $priority_level->priority_level;
                    if ($request->due_date == '') {
                        $duedate = Carbon::now()->addMinutes($priority_level->tat);
                    }
                } else {
                    $priority = '1';
                }

            } else {
                $priority = $request->priority_id;
            }
            $today = Carbon::now()->format('Y-m-d');
            $tech_flag = DB::table("ticket_categories")
                         ->where("id",$request->category_id)
                         ->select("tech_workflow")
                         ->first();
            $tech_workflow = $tech_flag->tech_workflow;
            $status_id=11;
            $status_code = 'AT';
            $approver_user = NULL;
            
            if($tech_workflow==1){
                if($user->hasPermissionTo('Tickets Approval')){
                    $status_id=9;
                    $status_code = 'AP';
                    $approver_user = $user->id;
                }else{
                    $status_id=2;
                    $status_code = 'WA';
                    $approver_user = NULL;
                }
            }
            if($request->assigned_to == null){      
                $multiple_users[] = 0;
            }else{
                $multiple_users[] = 0;
            }
            // $multiple_users = $request->assigned_to;


            foreach ($multiple_users as $multipleuser) {
                $ticket = Ticket::create([
                    'title' => $request->title,
                    'open_date' => Carbon::now(),
                    'assigned_by' => $user->id,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'assigned_to' => $multipleuser,
                    'priority_id' => $priority,
                    'due_date' => $duedate,
                    'due_date_org' => Carbon::parse($request->due_date)->format('Y-m-d'),
                    'status_id' => $status_id,
                    // 'classification_task' => $classification,
                ]);
                $last_id = $ticket->id;

                Ticket::where("id",$last_id)->update(array("project_id" => $project,'status_code' => $status_code,'approver' => $approver_user));
            if (isset($request->ticket_type) && $user->hasPermissionTo('Tickets Approval')) {
                Ticket::where("id",$last_id)->update(array("impacted_task_type" => $ticket_type,'impacted_order' => $order_type,'impacted_customer' => $customer_type,'impacted_user' => $user_type));
            }
                if (isset($request->filename) && count($request->filename) > 0) {
                    $dbfilenames = [];

                    foreach ($request->filename as $file) {
                        $name = $file->getClientOriginalName();
                        $uploaded_ext  = substr( $name, strrpos( $name, '.' ) + 1);
                        if( ( strtolower( $uploaded_ext ) == 'jpg' || strtolower( $uploaded_ext ) == 'jpeg' || strtolower( $uploaded_ext ) == 'png' || strtolower( $uploaded_ext ) == 'xls' || strtolower( $uploaded_ext ) == 'xlsx' || strtolower( $uploaded_ext ) == 'pdf' || strtolower( $uploaded_ext ) == 'doc' || strtolower( $uploaded_ext ) == 'docx' )) {
                            $dbfilename = $ticket->id . "_0_" . $name;

                            $dbfilenames[] = $dbfilename;

                            //  $filename = $file->store('tickets', $name);
                            $filename = $file->storeAs('tickets', $dbfilename);
                            // Document::create([
                            //     'document_type_id' => '10',
                            //     'refrowid' => $request->get('customer_id'),
                            //     'actual_filename' => $name,
                            //     'ref_filename' => $filename,
                            //     'description' => '',
                            // ]);
                        }
                    }

                    Ticket::where('id', $ticket->id)
                        ->update(['attachemnts' => implode(',', $dbfilenames)]);

                }

                $ticketnotification = TicketNotification::create([
                    'ticket_id' => $ticket->id,
                    'notification_by' => $user->id,
                    'notification_to' => $multipleuser,
                    'status_id' => 1,
                ]);

                $success_output = '<div class="alert alert-success">Data Inserted</div>';
                if ($tech_workflow==1 && $status_code == 'WA') {
                // $options = array(
                //         'cluster' => env('PUSHER_APP_CLUSTER'),
                //         'encrypted' => true
                //         );
                // $pusher = new Pusher(
                //             env('PUSHER_APP_KEY'),
                //             env('PUSHER_APP_SECRET'),
                //             env('PUSHER_APP_ID'), 
                //             $options
                //           );
                $ticket_approval = DB::table("permissions")->where("name","Tickets Approval")
                               ->select("id")
                               ->first();
                               
                if (!empty($ticket_approval)) {
                    $apprroles = DB::table("role_has_permissions")
                                 ->join("model_has_roles","role_has_permissions.role_id","model_has_roles.role_id")
                                 ->where("role_has_permissions.permission_id",$ticket_approval->id)
                                 ->select("model_has_roles.model_id")
                                 ->get();
                    
                }
                foreach ($apprroles as $key => $value) {
                    $userId = $value->model_id;
                    $session_id = User::where("id",$userId)
                                  ->select("session_id")
                                  ->first();
                    if ($session_id->session_id != '') {
                        // $data['message'] = 'A new ticket has been created for approval';
                        $data['message'] = 'New ticket created - '.$request->title.' - '.$user->firstname.' '.$user->lastname;
                        $approval_to = $userId; 
                        $channel = 'notify-channel-'.$approval_to;
                    
                    } else {
                        $message = 'New ticket created - '.$request->title.' - '.$user->firstname.' '.$user->lastname;
                        DB::table("ticket_pusher_notification")
                        ->insert(["user_id" => $userId,
                            "message" => $message
                        ]);
                    }
                }
                
            }
            }
            

        } else if ($request->get('ticketresponse_button_action') == 'insert') {
            if ($request->priority_change != '' && $request->response_status == '') {
                $validation = Validator::make($request->all(), [
                    'taskcomments' => 'required',
                ]);
            } else {
                $validation = Validator::make($request->all(), [
                    'filename.*' => 'required|mimes:jpeg,png,xls,xlsx,doc,docx,pdf',
                ]);
            }
            if ($validation->fails()) {
                foreach ($validation->messages()->getMessages() as $field_name => $messages) {
                    $error_array[] = $messages;
                    //$error_array[] = $field_name;
                }
            } else {
            $user = Auth::user();
            $user_role = $user->roles->pluck('id')->first();
            $today = Carbon::now()->format('Y-m-d');
            $categoryId = '';
            $assigned_by = '';
            $assigned_to = '';
            $ticket_info = Ticket::where('id',$request->ticket_assign_id)
                            ->first();

            if ($ticket_info) {
                $categoryId = $ticket_info->category_id; 
                $assigned_by = $ticket_info->assigned_by;
                $assigned_to = $ticket_info->assigned_to;
            }
            if (isset($request->category_id) &&  $request->category_id != '') {
                $categoryId = $request->category_id;
            }
            $input = $request->all();
            // $input['response_date'] = Carbon::now();
            $input['user_id'] = $user->id;
            $input['comments'] = $request->taskcomments;
            $input['updated_status_id'] = $request->response_status;
            $input['ticket_id'] = $request->ticket_assign_id;
            $input['category_id'] = $categoryId;
            $input['role'] = $user_role;

            if (isset($input['updated_due_date'])) {

                $input['updated_due_date'] = Carbon::parse($request->updated_due_date)->format('Y-m-d');

            } else if(isset($request->update_est_tat)) {
                $input['updated_due_date'] = Carbon::parse($request->update_est_tat)->format('Y-m-d');
            }
            $tech_flag = DB::table("ticket_categories")
                         ->where("id",$categoryId)
                         ->select("tech_workflow")
                         ->first();
            $tech_workflow = $tech_flag->tech_workflow;

            if ($tech_workflow == 1) {
                $user_id = $user->id;
                $current_userrole = DB::table("model_has_roles")
                        ->join("roles","roles.id","model_has_roles.role_id")
                        ->where("model_has_roles.model_id",$user_id)
                        ->select("roles.name")
                        ->get();
                $allroles = array();
                foreach ($current_userrole as $key => $value) {
                    $user_role = $value->name;
                    array_push($allroles, $user_role);
                    $current_role = $value;
                }
                if ($user->hasPermissionTo('Tickets Approval')) {
                    $user_role = 'Approver';
                    array_push($allroles, 'Approver');
                }
                $role_name = $current_role->name;
                if ($user->hasPermissionTo('Tickets Approval')) {
                    $role_name = 'Approver';
                }
                if ($request->progress != '') {
                    $update["progress"] = $request->progress/100;
                } else {
                    $update["progress"] = $ticket_info->progress;
                }
                if ($request->priority_change != '') {
                    $update["priority_id"] = $request->priority_change;
                } else {
                    if ($request->priority_id != '') {
                        $update["priority_id"] = $request->priority_id;
                    } else {
                        $update["priority_id"] = $ticket_info->priority_id;
                    }
                }
                if ($request->update_due_date != '') {
                    $update["due_date"] = Carbon::parse($request->updated_due_date)->format('Y-m-d');
                } else {
                    $update["due_date"] = $ticket_info->due_date;
                }
                if (isset($request->ticket_type) && $user->hasPermissionTo('Tickets Approval')) {
                    $update["impacted_task_type"] = $ticket_type = $request->ticket_type;
                    $update["impacted_order"] = $order_type = $request->order_type;
                    $update["impacted_customer"] = $customer_type = $request->customer_type;
                    $update["impacted_user"] = $user_type = $request->user_type;
                    $priority_level = DB::table("ticket_impacted_logic")
                                ->where("type",$ticket_type)
                                ->where("impacted_order",$order_type)
                                ->where("impacted_customer",$customer_type)
                                ->where("impacted_user",$user_type)
                                ->select("priority_level","tat")
                                ->first();
                                
                    if($priority_level) {
                        $update["priority_id"] = $priority_level->priority_level;
                        if ($priority_level->tat != NULL && $request->update_due_date == '') {
                            $duedate = Carbon::now()->addMinutes($priority_level->tat);
                            $update["due_date"] = $duedate;
                        } else {
                            $update["due_date"] = Carbon::parse($request->updated_due_date)->format('Y-m-d');
                        }
                    } else {
                        $update["priority_id"] = '1';
                    }
                    
                }
                
                if ($request->response_status != '') {
                    $status  = DB::table('ticket_status')
                               ->where('status_id','=',$request->response_status);
                    $status = $status->where(function ($q) use ($role_name) {
                                $q->whereNull('role_name')
                                ->orWhere('role_name','=',$role_name);
                            });
                               
                    $status = $status->select("next_status_id")
                              ->first();
                    $status_code = DB::table("ticket_statuses")
                                   ->where("id",$status->next_status_id)
                                   ->select("status_code")
                                   ->first();
                    $update["status_id"] = $status->next_status_id;
                    $update["status_code"] = $status_code->status_code;
                    if ($user->hasRole('Developer')) {
                        if ($status_code->status_code == "ST" || $status_code->status_code == "TE" || $status_code->status_code == "TC") {
                            $update["progress"] = 1;
                        }
                    }
                    if ($status_code->status_code == 'AP') {
                        $update["approver"] = $user->id;
                    }
                }
                
                if ($request->update_assigned_to != '' && $request->update_assigned_to != "Select") {
                    $update["assigned_to"] = $request->update_assigned_to;
                } else {
                    $update["assigned_to"] = $ticket_info->assigned_to;
                }
                if ($request->ref_client_id != '') {
                    $update["reg_client_id"] = $request->ref_client_id;
                } else {
                    $update["reg_client_id"] = $ticket_info->reg_client_id;
                }
                // if ($request->priority_id != '') {
                //  $update["priority_id"] = $request->priority_id;
                // } else {
                //  $update["priority_id"] = $ticket_info->priority_id;
                // }
                if ($request->project_list != '') {
                    $update["project_id"] = $request->project_list;
                    $resource = DB::table("tk_projects")
                                ->where("id",$request->project_list)
                                ->select("resource")
                                ->first();
                    $update["resource"] = $resource->resource;
                } else {
                    $update["project_id"] = $ticket_info->project_id;
                }
                if ($request->start_date != '') {
                    $update["started_date"] = Carbon::parse($request->start_date)->format('Y-m-d');
                } else {
                    $update["started_date"] = $ticket_info->started_date;
                }
                if ($request->update_est_tat != '') {
                    $update["update_est_tat"] = Carbon::parse($request->update_est_tat)->format('Y-m-d');
                } else {
                    $update["update_est_tat"] = $ticket_info->update_est_tat;
                }
                if ($request->update_type != '') {
                    $update["update_type"] = $request->update_type;
                } else {
                    $update["update_type"] = $ticket_info->update_type;
                }
                if ($request->effort != '') {
                    $update["effort"] = $request->effort;
                } else {
                    $update["effort"] = $ticket_info->effort;
                }
                if ($request->clarification_to != '') {
                    $update["clarification_raised_to"] = $request->clarification_to;
                    $update["clarification_raised_by"] = $user_id;
                } else {
                    $update["clarification_raised_to"] = $ticket_info->clarification_raised_to;
                    $update["clarification_raised_by"] = $ticket_info->clarification_raised_by;
                }
                if ($request->effort != '') {
                    $update["testing"] = $request->testing_needed;
                } else {
                    $update["testing"] = $ticket_info->testing;
                }
                $update_user = Ticket::where("id",$request->ticket_assign_id)
                               ->update($update);   
                $options = array(
                        'cluster' => env('PUSHER_APP_CLUSTER'),
                        'encrypted' => true
                        );
                $pusher = new Pusher(
                            env('PUSHER_APP_KEY'),
                            env('PUSHER_APP_SECRET'),
                            env('PUSHER_APP_ID'), 
                            $options
                          );
                if ($request->update_assigned_to != '' && $request->update_assigned_to != 'Select') {
                    $session_id = User::where("id",$request->update_assigned_to)
                                  ->select("session_id")
                                  ->first();
                    if ($session_id->session_id != '') {
                        // $data['message'] = 'A new ticket has been assigned to you';
                        $data['message'] = 'New ticket assigned - '.$request->task_name_hidden;
                        $assigned_to = $request->update_assigned_to; 
                        $channel = 'notify-channel-'.$assigned_to;
                        $pusher->trigger($channel, 'App\\Events\\TicketPushNotification', $data);
                    } else {
                        $message = 'New ticket assigned - '.$request->task_name_hidden;
                        DB::table("ticket_pusher_notification")->insert([
                            'user_id' => $request->update_assigned_to,
                            'message' => $message
                        ]);
                    }
                }
                if (isset($status_code)) {
                    $proj_manager = DB::table("roles")
                                        ->where("name","IT Project Manager")
                                        ->first();
                    $proj_manager_id = $proj_manager->id;
                    $project_manager = DB::table("model_has_roles")
                                            ->where("role_id",$proj_manager_id)
                                            ->first(); 
                    $manager = $project_manager->model_id; 
                    
                    if ($status_code->status_code == 'DC') {
                        $session_id = User::where("id",$ticket_info->approver)
                                      ->select("session_id")
                                      ->first();
                        if ($session_id->session_id != '') {
                            $data['message'] = 'Design Created - '.$request->task_name_hidden;
                            $approver = $ticket_info->approver; 
                            $channel = 'notify-channel-'.$approver;
                            $pusher->trigger($channel, 'App\\Events\\TicketPushNotification', $data);
                        } else {
                            $message = 'Design Created - '.$request->task_name_hidden;
                            DB::table("ticket_pusher_notification")->insert([
                                'user_id' => $ticket_info->approver,
                                'message' => $message
                            ]);
                        }
                    }
                    if ($status_code->status_code == 'DA' || $status_code->status_code == 'DR') {
                        $session_id = User::where("id",$manager)
                                      ->select("session_id")
                                      ->first();
                        if ($session_id->session_id != '') {
                            if ($status_code->status_code == 'DA') {
                                $data['message'] = 'Design Approved - '.$request->task_name_hidden;
                            } else if($status_code->status_code == 'DR') {
                                $data['message'] = 'Design Rework required - '.$request->task_name_hidden;
                            } 
                            $channel = 'notify-channel-'.$manager;
                            $pusher->trigger($channel, 'App\\Events\\TicketPushNotification', $data);
                        } else {
                            if ($status_code->status_code == 'DA') {
                                $message = 'Design Approved - '.$request->task_name_hidden;
                            } else if($status_code->status_code == 'DR') {
                                $message = 'Design Rework required - '.$request->task_name_hidden;
                            } 
                            DB::table("ticket_pusher_notification")->insert([
                                'user_id' => $manager,
                                'message' => $message
                            ]);
                        }
                    }
                    if ($status_code->status_code == 'H') {
                        $other_users = TicketComments::where("ticket_id",$request->ticket_assign_id)
                                      ->select("user_id")
                                      ->orderByDesc("id")
                                      ->first();
                        if ($other_users) {
                            $last_user = $other_users->user_id;
                        } else {
                            $last_user = $assigned_by;
                        }
                        $session_id = User::where("id",$last_user)
                                      ->select("session_id")
                                      ->first();
                        if ($session_id->session_id != '') {
                            $data["message"] = "Task on hold - ".$request->task_name_hidden;
                            $channel = 'notify-channel-'.$manager;
                            $pusher->trigger($channel, 'App\\Events\\TicketPushNotification', $data);
                            if ($manager != $last_user) {
                                $channel = 'notify-channel-'.$last_user;
                                $pusher->trigger($channel, 'App\\Events\\TicketPushNotification', $data);
                            }
                        } else {
                            $message = "Task on hold - ".$request->task_name_hidden;
                            DB::table("ticket_pusher_notification")->insert([
                                'user_id' => $manager,
                                'message' => $message
                            ]);
                            if ($manager != $last_user) {
                                DB::table("ticket_pusher_notification")->insert([
                                    'user_id' => $last_user,
                                    'message' => $message
                                ]);
                            }
                        }
                    }
                }
                if ($request->priority_change != '') {
                    $proj_manager = DB::table("roles")
                                    ->where("name","IT Project Manager")
                                    ->first();
                    $proj_manager_id = $proj_manager->id;
                    $project_manager = DB::table("model_has_roles")
                                        ->where("role_id",$proj_manager_id)
                                        ->first(); 
                    $manager = $project_manager->model_id;
                    $priority_name = DB::table("ticket_priorities")
                                     ->where("id",$request->priority_change)
                                     ->first();
                    $name = $priority_name->name;
                    $session_id = User::where("id",$manager)
                                  ->select("session_id")
                                  ->first();
                    if ($session_id->session_id != '') {
                        $data["message"] = "Task priority changed to ".$name." - ".$request->task_name_hidden;
                        $channel = 'notify-channel-'.$manager;
                        $pusher->trigger($channel, 'App\\Events\\TicketPushNotification', $data);
                    } else {
                        $message = "Task priority changed to ".$name." - ".$request->task_name_hidden;
                        DB::table("ticket_pusher_notification")->insert([
                                    'user_id' => $manager,
                                    'message' => $message
                                ]);
                    }
                    $other_users = TicketComments::where("ticket_id",$request->ticket_assign_id)
                                      ->select("user_id")
                                      ->orderByDesc("id")
                                      ->first();
                    if ($other_users) {
                        $last_user = $other_users->user_id;
                    } else {
                        $last_user = $assigned_by;
                    }
                    $session_id = User::where("id",$last_user)
                                  ->select("session_id")
                                  ->first();
                    if ($session_id->session_id != '') {
                        if ($manager != $last_user) {
                            $channel = 'notify-channel-'.$last_user;
                            $pusher->trigger($channel, 'App\\Events\\TicketPushNotification', $data);
                        }
                    } else {
                        $message = "Task priority changed to ".$name." - ".$request->task_name_hidden;
                        DB::table("ticket_pusher_notification")->insert([
                                    'user_id' => $last_user,
                                    'message' => $message
                                ]);
                    }
                               
                }

                // $taskdetails = TicketComments::create($input);
            } else {
                $status  = DB::table('ticket_statuses')->where('id','=',$request->response_status)->first();
                $next_status_id = $status->next_statuss_id;
                $status_code = DB::table("ticket_statuses")
                                   ->where("id",$next_status_id)
                                   ->select("status_code")
                                   ->first();
                    $input1["status_id"] = $next_status_id;
                    $input1["status_code"] = $status_code->status_code;
                    $status_code = $status_code->status_code;
                if ($status_code == 'D' && isset($input['updated_due_date'])) {

                $task = Ticket::where('id', $input['ticket_assign_id'])
                    ->update(['due_date' => $input['updated_due_date'], 'status_id' => $request->response_status]);

            
            } else {
                    
                        $input1['status_id'] = $next_status_id;
                        
                    
                    if($status_code=='AT'){
                            $input1['assigned_to'] = $request->update_assigned_to;
                            $input1['updated_assigned_by'] =$user->id;
                            $input1['resource'] =$request->resource;
                            $input1['effort'] =$request->effort;
                         

                            if (isset($request->update_est_tat)) {
                                $input1['update_est_tat'] = Carbon::parse($request->update_est_tat)->format('Y-m-d');
                            }

                            $input1['update_type'] =$request->update_type;
                    }
                    // Updating table when the status is slected as approved
                    if($status_code == 'AP'){
                        $input1['priority_id'] = $request->priority_id;
                        if (isset($request->update_due_date)) {
                            $input1['due_date'] = Carbon::parse($request->update_due_date)->format('Y-m-d');
                        }
                        $input1['reg_client_id'] = $request->ref_client_id;
                        

                    }

                    if($status_code=='ST'){
                            $input1['started_date'] = Carbon::now();
                    }
                    if(($status_code=='CL' && $categoryId == 4) || ($status_code=='ST' && $categoryId == 4)){
                        $input_val['assigned_to_optit'] = $request->assigned_to_optit;
                        $input_val['optit_item'] = $request->optit_item;

                        $task = Ticket::where('id',$input['ticket_assign_id'])
                        ->update(['status_id' => $request->response_status,'status_code' => $status_code,'assigned_to_optit' => $input_val['assigned_to_optit'],
                            'category_optit' => $input_val['optit_item']]);

                    }
                    
            }
            }
            if (isset($update["status_code"])) {
                if (($request->progress == '' && $update["status_code"] != 'ST' && $update["status_code"] != 'TES') || $request->taskcomments != '')
                {
                    $taskdetails = TicketComments::create($input);
                }
            }
            
            if (isset($request->filename) && count($request->filename) > 0) {
                $dbfilenames = [];

                foreach ($request->filename as $file) {
                    $name = $file->getClientOriginalName();
                    $uploaded_ext  = substr( $name, strrpos( $name, '.' ) + 1);
                    if( ( strtolower( $uploaded_ext ) == 'jpg' || strtolower( $uploaded_ext ) == 'jpeg' || strtolower( $uploaded_ext ) == 'png' || strtolower( $uploaded_ext ) == 'xls' || strtolower( $uploaded_ext ) == 'xlsx' || strtolower( $uploaded_ext ) == 'pdf' || strtolower( $uploaded_ext ) == 'doc' || strtolower( $uploaded_ext ) == 'docx' )) {
                        $dbfilename = $request->ticket_assign_id . "_" . $taskdetails->id . "_" . $name;

                        $dbfilenames[] = $dbfilename;

                        //  $filename = $file->store('tickets', $name);
                        $filename = $file->storeAs('tickets', $dbfilename);
                        // Document::create([
                        //     'document_type_id' => '10',
                        //     'refrowid' => $request->get('customer_id'),
                        //     'actual_filename' => $name,
                        //     'ref_filename' => $filename,
                        //     'description' => '',
                        // ]);
                    }
                }

                TicketComments::where('id', $taskdetails->id)
                    ->update(['attachments' => implode(',', $dbfilenames)]);

            }

            $ticket = Ticket::where('id', $request->ticket_assign_id)->first();

            $notification_to = ($ticket->assigned_by != $user->id) ? $ticket->assigned_by : $ticket->assigned_to;

            $ticketnotification = TicketNotification::create([
                'ticket_id' => $request->ticket_assign_id,
                'notification_by' => $user->id,
                'notification_to' => $notification_to,
                'status_id' => $request->response_status,
            ]);

            // if ($request->get('response_status') == 2) {
            //   $task = Ticket::where('id', $input['task_assign_id'])
            //     ->update(['task_status' => 2]);
            //   //$task = TaskAssign::create($input);
            //   $tasktype = $input['tasktype'];
            //   if ($tasktype == "overduetasks") {
            //     $logic = "<";
            //   } else if ($tasktype == "todaytasks") {
            //     $logic = "=";
            //   } else {
            //     $logic = ">";
            //   }
            //   $response_array = Ticket::join('users', 'task_assign.opened_by', '=', 'users.id')
            //     ->select('task_assign.id', 'task_assign.task_name', 'task_assign.due_date', DB::raw('CONCAT(users.firstname, " ", users.lastname) AS fullname'))
            //     ->where('assigned_to', $user->id)
            //     ->where('due_date', $logic, $today)
            //     ->whereIn('task_status', [0, 1])->get();
            // }

            $success_output = '<div class="alert alert-success">Data Inserted</div>';

        }
        }
        $output = array(
            'error' => $error_array,
            'success' => $success_output,
            'responsedata' => $response_array,
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
        $user = Auth::user();
        $status = $request->status;
  
        $data = Ticket::join('ticket_statuses', 'tickets.status_id', '=', 'ticket_statuses.id')
            ->leftjoin('users as createduser', 'tickets.assigned_by', '=', 'createduser.id')
            ->leftjoin('users as assignuser', 'tickets.assigned_to', '=', 'assignuser.id')
            ->leftjoin('ticket_priorities', 'tickets.priority_id', '=', 'ticket_priorities.id')
            ->leftjoin('ticket_type', 'tickets.update_type', '=', 'ticket_type.id')
            ->leftjoin('projects', 'tickets.project_id', '=', 'projects.id')
            ->leftjoin('ticket_priorities as p', 'tickets.priority_id', '=', 'p.id')
            ->leftjoin('ticket_priorities as e', 'tickets.effort', '=', 'e.id')
            ->select(DB::raw('CONCAT("#TK", tickets.id) AS ticketid'),
                'tickets.id', 'tickets.title', 'tickets.open_date', DB::raw('CONCAT(createduser.firstname, " ", createduser.lastname) AS opened_by_name'), 'tickets.due_date', DB::raw('CONCAT(assignuser.firstname, " ", assignuser.lastname) AS assigned_to_name'), 'ticket_statuses.name as task_status_name', 'ticket_priorities.name as priority', 'ticket_priorities.color as taskprioritycolor','ticket_type.type as tickettype','tickets.update_est_tat','p.name as priority_name','e.name as effort_name','projects.project_name as projectname');
            

        $data = $data->get();


        
        return Datatables::of($data)->addColumn('checkbox', function ($data) {
            return '<input type="checkbox" name="Ticket_ids[]" value="' . $data->id . '">';
        })->addColumn('action', function ($data) {
            return '<a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto edit" id="' . $data->id . '"><i class="bi bi-pencil"></i></a>&nbsp;&nbsp;<a href="#" class="btn btn-icon btn-active-light-danger w-30px h-30px ms-auto delete" id="' . $data->id . '"><i class="bi bi-trash"></i></a>';
        })->editColumn('open_date', function ($data) {
            $carbonDate = Carbon::parse($data->open_date);
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

    
    public function getticketdetails(Request $request) {
        $id = $request->input('id');
        $user = Auth::user();       
        $now = Carbon::now();

        $output = Ticket::join('users as createduser', 'tickets.assigned_by', '=', 'createduser.id')
            ->leftjoin('users as assignuser', 'tickets.assigned_to', '=', 'assignuser.id')
            ->leftjoin('ticket_categories', 'tickets.category_id', '=', 'ticket_categories.id')
            ->leftjoin('ticket_statuses', 'tickets.status_id', '=', 'ticket_statuses.id')
            ->leftjoin('ticket_priorities', 'tickets.priority_id', '=', 'ticket_priorities.id')
            ->leftjoin('projects', 'tickets.project_id', '=', 'projects.id')
            ->leftjoin('impacted_task_type', 'tickets.impacted_task_type', '=', 'impacted_task_type.id')
            ->leftjoin('impacted_orders', 'tickets.impacted_order', '=', 'impacted_orders.id')
            ->leftjoin('impacted_customer', 'tickets.impacted_customer', '=', 'impacted_customer.id')
            ->leftjoin('impacted_user', 'tickets.impacted_user', '=', 'impacted_user.id')
            ->select('tickets.created_at', 'tickets.updated_at', 'ticket_priorities.name as pname', 'ticket_priorities.color as pcolor',
                'ticket_categories.name as cname', 'ticket_categories.color as ccolor',
                'ticket_statuses.name as sname', 'ticket_statuses.color as scolor', 'tickets.priority_id as taskpriorityid', 'tickets.id', 'title', 'open_date', DB::raw('CONCAT(createduser.firstname, " ", createduser.lastname) AS opened_by_name'), '.tickets.due_date', 'tickets.due_date_org',  DB::raw('CONCAT(assignuser.firstname, " ", assignuser.lastname) AS assigned_to_name'), DB::raw('(CASE WHEN assignuser.id = ' . $user->id . ' THEN 1 ELSE 0 END) as assignuser '), 'tickets.attachemnts as task_attachments','tickets.category_id','tickets.status_id','tickets.current_user_id','tickets.project_id','tickets.assigned_by','tickets.project_id','tickets.testing','impacted_task_type.name as tasktype','impacted_orders.name as impactorder',
                    'impacted_customer.name as impactcustomer','impacted_user.name as impactuser','tickets.status_code','tickets.impacted_task_type','tickets.impacted_order',
                    'tickets.impacted_customer','tickets.impacted_user','tickets.assigned_to','tickets.assigned_by','tickets.approver','tickets.assigned_to_optit','tickets.clarification_raised_to')
            ->where('tickets.id', '=', $id)
            ->first();
            
        $allowed_status = array();
        $team_members = array();
        $tech_flag = DB::table("ticket_categories")
                         ->where("id",$output->category_id)
                         ->select("tech_workflow")
                         ->first();
        $tech_workflow = $tech_flag->tech_workflow;
        if ($tech_workflow == '1') {
            $user_role = $user->roles->pluck('name')->first();
          
            // $user_role = 'Approver';
          
            $client_id = array();
            $statuses = array();
            $curr_status = $output->status_id;
            $get_status = DB::table("ticket_status")
                              ->where("deleted","0");
            $get_status = $get_status->where(function ($query) use ($user_role){
                                $query->where("role",$user_role)
                                      ->orWhere("role",NULL);
                            });
            $get_status = $get_status->where("ticket_category_id","1")
                          ->select("id","status")
                          ->get()
                          ->toArray();

            foreach ($get_status as $key => $value) {
                $explode = array();
                $explode = explode(",", $value->status);
               
                foreach ($explode as $k => $val) {
                    if ($val == $curr_status) {
                        array_push($statuses, $value->id);
                    }
                }
            }

            $allowed_status = DB::table("ticket_status")
                              ->where("deleted","0")
                              ->whereIn("id",$statuses);
            $allowed_status = $allowed_status->where(function ($query) use ($user_role){
                                $query->where("role",$user_role)
                                      ->orWhere("role",NULL);
                            });
            $allowed_status = $allowed_status->where("ticket_category_id","1")
                              ->get()
                              ->toArray();

            if (Auth::user()->hasRole("Developer")) {
                $developer = \DB::table("projects")
                         ->where("developer","!=",NULL)
                         ->select("developer","id")
                         ->get();
                $client_id = array();
                foreach ($developer as $key => $value) {
                    $arr = array();
                    $arr = explode(",", $value->developer);
                    if (in_array($user->id, $arr)) {
                        array_push($client_id, $value->id);
                    }
                }
                if ($output->status_code != 'REV' && $output->assigned_by != Auth::user()->id) {
                    foreach ($allowed_status as $key => $value) {
                        if ($value->status == 'Rework') {
                            unset($allowed_status[$key]);
                        }
                    }
                }
                
                if ($output->testing == "yes") {
                    foreach ($allowed_status as $key => $value) {
                        if ($value->status == 'Completed') {
                            unset($allowed_status[$key]);
                        }
                    }
                }
                
            }
            if (Auth::user()->hasRole("IT Project Manager")) { 
                if ($output->assigned_to != Auth::user()->id) {
                    foreach ($allowed_status as $key => $value) {
                        if ($value->status == 'Completed' || $value->status == 'Started' || 
                            $value->status == 'Testing') {
                            unset($allowed_status[$key]);
                        }

                    }
                }
                if ($output->status_code != 'REV' && $output->assigned_by != Auth::user()->id || $output->assigned_by != Auth::user()->id) {
                    foreach ($allowed_status as $key => $value) {
                        if ($value->status == 'Rework') {
                            unset($allowed_status[$key]);
                        }
                    }
                }
                if ($output->status_code != 'CLA' && $output->clarification_raised_to != Auth::user()->id) {
                    foreach ($allowed_status as $key => $value) {
                        if ($value->status == 'Clarification Resolved') {
                            unset($allowed_status[$key]);
                        }
                    }
                }
            }
            if ($user_role == 'Approver') {
                if (($output->status_code != 'REV' && $output->assigned_by != Auth::user()->id) || $output->assigned_by != Auth::user()->id) {
                    foreach ($allowed_status as $key => $value) {
                        if ($value->status == 'Rework') {
                            unset($allowed_status[$key]);
                        }
                    }
                }
                if ($output->status_code == 'CLA' && $output->clarification_raised_to != Auth::user()->id) {
                    foreach ($allowed_status as $key => $value) {
                        if ($value->status == 'Clarification Resolved') {
                            unset($allowed_status[$key]);
                        }
                    }
                }
            }
            if ($output->assigned_by != Auth::user()->id) {
              
                foreach ($allowed_status as $key => $value) {
                    if ($value->status == 'Close') {
                        unset($allowed_status[$key]);
                    }
                }
            }
            
            $team_members = $this->gettechteammembers();
           
                if (empty($allowed_status) && $user_role != 'IT Project Manager' && $user_role != 'Developer' && $user_role != 'Tester' && $user_role != 'Approver') {
                    $allowed_status = DB::table("ticket_status")
                                      ->where("deleted","0")
                                      ->where("role",NULL)
                                      ->whereIn("id",$statuses)
                                      ->where("ticket_category_id","1")
                                      ->get()
                                      ->toArray();
                    if ($output->status_code != 'REV' && $output->assigned_by != Auth::user()->id) {
                        foreach ($allowed_status as $key => $value) {
                            if ($value->status == 'Rework') {
                                unset($allowed_status[$key]);
                            }
                        }
                    }
                    if ($output->status_code != 'CLA' && $output->clarification_raised_to != Auth::user()->id) {
                        foreach ($allowed_status as $key => $value) {
                            if ($value->status == 'Clarification Resolved') {
                                unset($allowed_status[$key]);
                            }
                        }
                    }
                }
            // }
        }
        $roles = DB::table("roles")->get()->toArray();
        if ($output->approver == NULL) {
            $output["approver"] = 0;
        } else {
            $output["approver"] = $output->approver;
        }
        $output["this_impacted_task_type"] = $output->tasktype;
        $output["this_impacted_order"] = $output->impactorder;
        $output["this_impacted_customer"] = $output->impactcustomer;
        $output["this_impacted_user"] = $output->impactuser;
        $output["tat"] = NULL;
      
        $output["status_code"] = $output->status_code;
        $output["project_list"] = DB::table('projects')->get();
        $output["category_id"] = $output->category_id;
        $output["proj_id"] = $output->project_id;
        $output["allowed_status"] = $allowed_status;
        $output["team_members"] = $team_members;
        $output["roles"] = $roles;
        $output["categories"] = DB::table('ticket_categories')->get();
        $output["ticket_type"] = DB::table('ticket_type')->get();
        $output["workflow"] = $tech_workflow;
        $output["impacted_task_type"] = DB::table('impacted_task_type')->get();
        $output["impacted_customer"] = DB::table('impacted_customer')->get();
        $output["impacted_user"] = DB::table('impacted_user')->get();
        $output["impacted_orders"] = DB::table('impacted_orders')->get();
    
        

        $output['taskcomments'] = TicketComments::join('users', 'ticket_comments.user_id', '=', 'users.id')

       
            ->leftjoin('ticket_statuses', 'ticket_comments.updated_status_id', '=', 'ticket_statuses.id')   
            ->select('ticket_comments.id', 'ticket_comments.attachments', 'ticket_comments.updated_due_date', 'ticket_comments.created_at', 'ticket_comments.comments', 'ticket_comments.updated_due_date', 'ticket_comments.created_at', 'ticket_statuses.name  as statusname', DB::raw('CONCAT(users.firstname, " ", users.lastname) AS fullname'))

            ->where('ticket_comments.ticket_id', '=', $id)
            ->orderBy('ticket_comments.id', 'ASC')
            ->get();

        TicketNotification::where('ticket_id', $output->id)->where('notification_to', $user->id)
            ->update(['display' => 1]);

        $output['notifications'] = TicketNotification::join('tickets', 'ticket_notifications.ticket_id', '=', 'tickets.id')
            ->join('users', 'ticket_notifications.notification_by', '=', 'users.id')
            ->join('ticket_statuses', 'ticket_notifications.status_id', '=', 'ticket_statuses.id')
            ->select('ticket_notifications.ticket_id', 'tickets.title', DB::raw('CONCAT(users.firstname, " ", users.lastname) AS fullname'), 'ticket_statuses.alt_name')
            ->where('ticket_notifications.notification_to', $user->id)
            ->where('ticket_notifications.display', 0)
            ->get();

        $output['created_noofdays']  = Carbon::parse($output->created_at)->diffInDays($now).' days ago';
        $output['lastupdated_noofdays']  = Carbon::parse($output->updated_at)->diffInDays($now).' days ago';
        if($output->sname != 'Closed')
        {           
            $output['delayed_noofdays']  = Carbon::parse($output->due_date)->diffInDays($now).' days';
        }
        else
        {
            $output['delayed_noofdays']  = Carbon::parse($output->updated_at)->diffInDays(Carbon::parse($output->due_date)).' days';
        }
       
        echo json_encode($output);

    }
    
    public function gettechteammembers() {
        // $category_id = $request->category_id;
        $team = array();
        $roles = array();
        $tech_team = array("Developer","IT Project Manager");
        // if ($category_id == '1') {
        $role_id = Role::whereIn("name",$tech_team)
                   ->select("id")
                   ->get()
                   ->toArray();
        foreach ($role_id as $key => $value) {
            array_push($roles, $value["id"]);
        }
        $users = DB::table("model_has_roles")->whereIn("role_id",$roles)
                ->select("model_id")
                ->get()
                ->toArray();
        foreach ($users as $key => $value) {
            array_push($team, $value->model_id);
        }
        
        $users = DB::table("users")
                 ->whereIn("id",$team)
                 ->where('deleted','!=',1)
                 ->select("id","firstname","lastname")
                 ->get()
                 ->toArray();
        
        return $users;
        // }
        
    }

    public function getdevelopers() {
        // $category_id = $request->category_id;
        $team = array();
        $roles = array();
        $tech_team = array("Developer");
        // if ($category_id == '1') {
        $role_id = Role::whereIn("name",$tech_team)
                   ->select("id")
                   ->get()
                   ->toArray();
        foreach ($role_id as $key => $value) {
            array_push($roles, $value["id"]);
        }
        $users = DB::table("model_has_roles")->whereIn("role_id",$roles)
                ->select("model_id")
                ->get()
                ->toArray();
        foreach ($users as $key => $value) {
            array_push($team, $value->model_id);
        }
        
        $users = DB::table("users")
                 ->whereIn("id",$team)
                 ->where('deleted','!=',1)
                 ->select("id","firstname","lastname")
                 ->get()
                 ->toArray();
        
        return $users;
        // }
        
    }

    public function assignProjects(Request $request) {
        $projects = $request->projects;
        $developer = $request->developer;
        $proj = DB::table('projects')
                ->where("id",$projects)
                ->select("developer")
                ->first();
        $developer_old = $proj->developer;
        if ($developer_old != NULL) {
            $dev = explode(",",$developer_old);
            if (!in_array($developer, $dev)) {
                $developer_old = $developer_old.','.$developer;
            }
        } else {
            $developer_old = $developer;
        }
        $update = DB::table("projects")
                  ->where("id",$projects)
                  ->update(array("developer" => $developer_old));

        return redirect()->intended('tickets/Open-1');
    }


}
