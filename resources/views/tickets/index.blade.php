@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<style>
    .col-sm-3{
        display: flex;
        width: 100%;
        gap: 5px;
    }
    .control-label{
        margin-bottom: 5px
    }
</style>
@endsection @section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-4">
    <div id="page-content">
     @if($statusname!="status")
        <div class="row demo-nifty-panel">
            <div class="container">
                <div class="col-sm-3">
                    @foreach($widgets as $key=>$value) @php $code = isset($value[$value["code"]]) ? $value[$value["code"]] : ""; @endphp
                    <a href="{{ $value['code'] }}" class="ticketype card border-0 min-h-200px mb-7" style="background-color: #35d29a;">
                        <div class="card-body d-flex flex-column flex-center text-center">
                            <img class="mw-100 h-100px mb-7 mx-auto" src="assets/media/illustrations/sigma-1/5.png" />
                            <h4 class="text-white text-uppercase">
                                {{ isset($value[$value["code"]]) ? $value[$value["code"]] : 0 }}
                                <div><strong>{{ $key }}</strong></div>
                            </h4>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <div class="row demo-nifty-panel">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-control d-flex justify-content-between">
                            <h3 class="panel-title text-danger">Tickets</h3>
                            <!-- <a href="{{ url('gantt') }}" target="_blank"><button type="button" id="view_chart" class="btn btn-primary nav dt-add" target="_blank">View Chart</button></a>
                            <button type="button" id="assign_proj" data-toggle="modal" data-target="#assignedproj" class="btn btn-primary nav dt-add">Assign Projects</button>
                           
                            <a href="{{ url('gantt') }}" target="_blank"><button type="button" id="view_chart" class="btn btn-primary nav dt-add">View Chart</button></a>
                            -->

                            <button type="button" name="add" id="add_task" data-func="dt-add" class="btn btn-primary py-4 mb-2">Create ticket</button>                           
                        </div>
                        
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif

                            <table border="1" align="center" id="assign_task_table" class="table table-bordered table-striped" width="100%">
                                <thead>
                                    <tr>
                                        <th align="center">Ticket#</th>
                                        <th align="center">Task Description</th>
                                        <th align="center">Project Name</th>
                                        <th align="center">Opened By</th>
                                        <th align="center">Assigned To</th>

                                        <th align="center">Due Date</th>
                                        <th align="center">TAT</th>
                                        <th align="center">Type</th>
                                        <th align="center">Priority</th>
                                        <th align="center">Effort</th>

                                        <th align="center">Task Status</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>

                            <div id="assignedproj" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Assign Projects To Team</h4>
                                        </div>
                                        <form method="post" action="{{ url('tickets.assignprojects') }}">
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                <label>Projects:</label>
                                                <select class="form-control" name="projects">
                                                    <option value="">Select</option>
                                                    @foreach($clients as $key=>$v)
                                                    <option value="{{ $v->id }}">{{ $v->project_name }}</option>
                                                    @endforeach
                                                </select>
                                                <label>Team:</label>
                                                <select class="form-control" name="developer">
                                                    <option>Select</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="assignTaskEditModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form method="post" id="task_edit_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="modal-header">
                                                <!-- <button type="button" class="close" data-ds-dismiss="modal"><i class="bi bi-x"></i></button> -->
                                                <!-- <h4 class="modal-title">Create New Task</h4> -->
                                            </div>

                                            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                                                    <div class="mb-13 text-center">
                                                        <h1 class="mb-3">Create Ticket</h1>

                                                        <div class="text-gray-400 fw-semibold fs-5">If you need more info, please check <a href="" class="fw-bold link-primary">Support Guidelines</a>.</div>
                                                    </div>

                                                <span id="form_output1"></span>
                                                <!--Text Input-->
                                                <div class="row">

                                                    <div class="d-flex flex-column fv-row fv-plugins-icon-container">
                                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                        <span class="required">Ticket Title</span>

                                                        <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a subject for your issue" data-bs-original-title="Specify a subject for your issue" data-kt-initialized="1">
                                                            <i class="bi bi-information fs-7"></i>
                                                        </span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid" placeholder="Enter your ticket title" name="title" id="title"/>
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                </div>

                                               
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="control-label" for="priority_id">Department</label>
                                                            <select name="category_id" id="category_id" class="form-control">
                                                                <option value="-1" selected="selected">-Select-</option>

                                                                @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 mb-2" id="customer_name">
                                                                <label class="control-label" for="description">Customer Name </label>
                                                                <select name="ref_client_id" id="ref_client_id" class="form-control">
                                                                    <option value="" selected="selected">-Select-</option>
                                                                    @foreach ($customers as $customer)
                                                                    <option value="{{ $customer->ref_client_id }}">{{ $customer->clientname }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="col-sm-6 mb-2" id="proj_list">
                                                        <div class="form-group">
                                                            <label class="control-label" for="project">Project</label>
                                                            <select class="js-example-basic-multiple form-control" name="project" id="project" style="width: 100%;">
                                                                <option value="" selected="selected">-Select-</option>

                                                                @foreach ($clients as $proj)
                                                                <option value="{{ $proj->id }}">{{ $proj->project_name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>


<!--                                                     
                                                        <div class="col-sm-6 mb-2">
                                                            <div class="form-group">
                                                                <label class="control-label" for="role_id">Role</label>

                                                                <select name="role_id" id="role_id" class="form-control">
                                                                    <option value="" selected="selected">-Select-</option>
                                                                    <option value="all">All</option>
                                                                    @foreach ($roles as $role)
                                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div> -->

                                                        <div class="col-sm-6 mb-2">
                                                            <div class="form-group">
                                                                <label class="control-label" for="assigned_to">Assigned To</label>
                                                                <select class="js-example-basic-multiple form-control" name="assigned_to[]" id="assigned_to" style="width: 100%;" multiple="multiple">
                                                                
                                                                        @foreach ($users as $k=>$user)
                                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                      

                                                        <div class="col-sm-6 mb-2">
                                                            <div class="form-group">
                                                                <label class="control-label" for="due_date">Due Date</label>
                                                                <div id="demo-dp-txtinput_duedate" class="input-group date">
                                                                    <input type="text" class="date form-control" name="due_date" id="due_date" placeholder="Due Date" value="" autocomplete="off" onkeydown="event.preventDefault()" />
                                                                    <span class="input-group-addon"><i class="demo-pli-calendar-4 jcal2"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 mb-2 priority">
                                                        <div class="form-group">
                                                            <label class="control-label" for="priority_id">Priority</label>
                                                            <select name="priority_id" id="priority_id" class="form-control">
                                                                <option value="1" selected="selected">-Select-</option>

                                                                @foreach ($prorites as $prority)
                                                                <option value="{{ $prority->id }}">{{ $prority->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                
                                                  
                                                   

                                                    <div class="col-sm-12 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label" for="description">Task Specifics</label>
                                                            <textarea id="description" name="description" rows="3" class="form-control" placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-group control-group increment-add-ticket">
                                                    <input type="file" name="filename[]" class="form-control" />
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-success btn-success-add-ticket" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                                    </div>
                                                </div>
                                                <div class="add-clone hide" style="display:none">
                                                    <div class="control-group input-group" style="margin-top: 10px;">
                                                        <input type="file" name="filename[]" class="form-control" />
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-danger btn-danger-add-ticket" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer ">
                                                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                                                    <input type="submit" name="submit" id="action" value="Submit" class="btn btn-info" />
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                            
                                        </form>
                                    </div>
                                </div>
                            </div>



                            

                            <div id="taskEditModal" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <form method="post" id="ticket_response_form">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                                <h4 class="modal-title">
                                                    <span id="task_name_view"> </span>
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                {{csrf_field()}}
                                                <span id="form_output_new"></span>

                                                {{-- New Edit page --}}

                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="content">
                                                        
                                                            <div class="panel well well-sm popup-panel">
                                                                <div class="panel-body">
                                                                    <div class="col-md-12">
                                                                        <div class="col-md-6 mb-2">
                                                                            <p><strong>Owner</strong>: <span id="opened_by_name_view"></span></p>
                                                                            <p><strong>Department</strong>: <span id="category_veiw"></span></p>
                                                                            <p><strong>Created</strong>:</p>
                                                                            <p id="created_at_veiw"></p>
                                                                            <p><strong>Project/Production</strong>:</p>
                                                                            <p id="impact_task_type"></p>
                                                                            <p><strong>Impacted Customer</strong>:</p>
                                                                            <p id="impact_customer"></p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-2">
                                                                            <p><strong>Responsible</strong>: <span id="assigned_to_name_view"></span></p>
                                                                            <p>
                                                                                <strong>Priority</strong>:

                                                                                <span id="prioritylabel"><label class="badge badge-danger"></label></span>
                                                                            </p>

                                                                            <p><strong>Last Update</strong>:</p>
                                                                            <p id="updated_at_veiw"></p>
                                                                            <p><strong>TAT</strong>:</p>
                                                                            <p id="impact_tat"></p>
                                                                            <p><strong>Impacted User</strong>:</p>
                                                                            <p id="impact_user"></p>
                                                                        </div>
                                                                        <div class="col-md-6 mb-2">
                                                                            <p><strong>Due Date</strong>: <span id="due_date_view"></span></p>
                                                                            <p><strong>Status</strong>: <span id="status_veiw"></span></p>
                                                                            <p><strong>Delayed Days</strong>: <span id="delayed_date_view"></span></p>
                                                                            <p><br /></p>
                                                                            <p><strong>Impacted Order</strong>:</p>
                                                                            <p id="impact_order"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" id="task_comments_view"></div>
                                                        </div>

                                                        <p style="margin-bottom: 0px; padding-bottom: 0px;" class="taskattachments">&nbsp;&nbsp;<strong>Attachments</strong> : <span id="task_attachments"></span></p>
                                                    </div>
                                                </div>

                                                <div id="displaycomments"></div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title">Reply</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="content">
                                                            <input type="hidden" value="" id="category_id" />
                                                            <input type="hidden" value="" id="category_id_new" />
                                                            <input type="hidden" name="task_name_hidden" id="task_name_hidden" value="" />
                                                            <div class="row">
                                                              

                                                                <div class="col-md-6 mb-2">
                                                                    <label class="control-label label_cl" for="role_id">Status</label>
                                                                    <select name="response_status" id="response_status" class="form-control response_status status_position">
                                                                        <option value="" selected="selected">-- Update Status --</option>
                                                                        <option value="6">Delayed</option>
                                                                        <option value="7">Closed</option>
                                                                        <option value="12">Started</option>
                                                                        <option value="11">Assign To</option>
                                                                        <option value="13">Waiting for Testing</option>
                                                                        <option value="7">Closed</option>
                                                                    </select>
                                                                </div>
                                                               
                                                                <div class="col-md-6 mb-2" id="progress">
                                                                    <label class="control-label" for="role_id">Progress</label>
                                                                    <input type="number" name="progress" id="progress" class="form-control" />
                                                                </div>
                                                               
                                                                <div class="col-md-6 mb-2" id="priority-change">
                                                                    <label class="control-label" for="priority">Priority</label>
                                                                    <select name="priority_change" id="priority_change" class="form-control">
                                                                        <option value="" selected="selected">-Select-</option>
                                                                        @foreach ($prorites as $prority)
                                                                        <option value="{{ $prority->id }}">{{ $prority->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                              
                                                                <div class="col-md-6 mb-2" id="clarification_role_div">
                                                                    <label class="control-label" for="clarification_role">Role</label>
                                                                    <select name="clarification_role" id="clarification_role" style="width: 100%;" class="form-control">
                                                                        <option value="">-- Select --</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 mb-2" id="clarification_user_div">
                                                                    <label class="control-label" for="clarification_to">User</label>
                                                                    <select name="clarification_to" id="clarification_to" style="width: 100%;" class="form-control">
                                                                        <option value="">-- Select --</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 mb-2">
                                                                    <div class="form-group ticket-delay-due-date">
                                                                        <label class="control-label" for="role_id">Revised Due Date</label>
                                                                        <div id="demo-dp-txtinput_duedate" class="input-group date">
                                                                            <input type="text" class="date form-control" name="updated_due_date" id="updated_due_date" placeholder="Select Revised Due Date" value="" autocomplete="off" />
                                                                            <span class="input-group-addon"><i class="demo-pli-calendar-4 jcal2"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="assigned_to">
                                                                        <label class="control-label" for="role_id">User</label>

                                                                        <select name="update_assigned_to" id="update_assigned_to" style="width: 100%;" class="form-control">
                                                                            <option value="" selected="selected">-- Select --</option>
                                                                                @foreach($users as $user)
                                                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>

                                                                                @endforeach
                                                                           
                                                                        </select>
                                                                    </div>
                                                                  
                                                                </div>

                                                                <div class="col-md-6 mb-2">
                                                                    <div class="assigned_to">
                                                                        <label class="control-label" for="role_id">Type</label>

                                                                        <select name="update_type" id="update_type" style="width: 100%;" class="form-control update_type">
                                                                            <option value="" selected="selected">-- Select --</option>
                                                                            <option value="1">General</option>
                                                                            <option value="2">Enchancement</option>
                                                                            <option value="3">Bug</option>
                                                                            <option value="4">New Development</option>
                                                                            <option value="5">Reports</option>
                                                                            <option value="6">New Product</option>
                                                                            <option value="7">Integration</option>
                                                                            <option value="8">Others</option>
                                                                        </select>
                                                                    </div>
                                                                   
                                                                </div>

                                                                <div class="col-md-6 mb-2 approved_to" id="customer_name">
                                                                    <label class="control-label" for="description">Customer Name </label>
                                                                    <select name="ref_client_id" id="ref_client_id" class="form-control">
                                                                        <option value="" selected="selected">-Select-</option>

                                                                        @foreach ($customers as $customer)
                                                                        <option value="{{ $customer->ref_client_id }}">{{ $customer->clientname }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="col-md-6 mb-2 approved_to">
                                                                    <label class="control-label" for="role_id">Due date</label>
                                                                    <div id="demo-dp-approved_duedate" class="input-group date">
                                                                        <input type="text" class="date form-control" name="update_due_date" id="update_due_date" placeholder="Duedate" value="" autocomplete="off" />
                                                                        <span class="input-group-addon"><i class="demo-pli-calendar-4 jcal2"></i></span>
                                                                    </div>
                                                                </div>
                                                         
                                                                <div class="form-group approved_to">
                                                                    <label class="control-label" for="role_id">Due date</label>
                                                                    <div id="demo-dp-approved_duedate" class="input-group date">
                                                                        <input type="text" class="date form-control" name="update_due_date" id="update_due_date" placeholder="Duedate" value="" autocomplete="off" />
                                                                        <span class="input-group-addon"><i class="demo-pli-calendar-4 jcal2"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-md-6 mb-2 approved_to margin_bottom" id="projects">
                                                                <label class="control-label" for="description">Project Name </label>
                                                                <select name="project_list" id="project_list" class="form-control"> </select>
                                                            </div>
                                                            <div class="col-md-6 mb-2 approved_to margin_bottom" id="dept">
                                                                <label class="control-label" for="category_id">Department</label>
                                                                <select name="category_id" id="department" class="form-control"> </select>
                                                            </div>
                                                            <div class="col-md-6 mb-2 approved_to margin_bottom" id="classification_use">
                                                                <label class="control-label" for="classification_use">Project/Production</label>
                                                                <select class="js-example-basic-multiple" name="ticket_type" id="ticket_type1" style="width: 100%;"> </select>
                                                            </div>
                                                     
                                                         
                                                           
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-group assigned_to">
                                                                    <label class="control-label" for="role_id">Start date</label>
                                                                    <div id="demo-dp-txtinput_duedate" class="input-group date">
                                                                        <input
                                                                            type="text"
                                                                            class="date form-control"
                                                                            name="start_date"
                                                                            id="start_date"
                                                                            placeholder="Start Date"
                                                                            value=""
                                                                            autocomplete="off"
                                                                            onkeydown="event.preventDefault()"
                                                                        />
                                                                        <span class="input-group-addon"><i class="demo-pli-calendar-4 jcal2"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-group assigned_to">
                                                                    <label class="control-label" for="role_id">End Date</label>
                                                                    <div id="demo-dp-txtinput_enddate" class="input-group date">
                                                                        <input
                                                                            type="text"
                                                                            class="date form-control"
                                                                            name="update_est_tat"
                                                                            id="update_est_tat"
                                                                            placeholder="TAT"
                                                                            value=""
                                                                            autocomplete="off"
                                                                            onkeydown="event.preventDefault()"
                                                                        />
                                                                        <span class="input-group-addon"><i class="demo-pli-calendar-4 jcal2"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        

                                                        <div class="col-md-6 mb-2 assigned_to">
                                                            <label class="control-label" for="role_id">Effort</label>
                                                            <select name="effort" id="effort" style="width: 100%;" class="form-control">
                                                                <option value="" selected="selected">-- Select --</option>
                                                                <option value="1">High</option>
                                                                <option value="2">Medium</option>
                                                                <option value="3">Low</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                 
                                                </div>
                                                <div class="row margin_bottom">
                                                    <div class="col-md-6 mb-2 assigned_to margin_left">
                                                        <label class="control-label" for="role_id">Testing required</label>
                                                        <select name="testing_needed" id="testing_needed" style="width: 100%;" class="form-control">
                                                            <option value="" selected="selected">-- Select --</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <textarea id="demo-summernote-ticket" name="taskcomments" rows="3" class="form-control mb-2 taskcomments" placeholder=""></textarea>

                                                <div class="input-group control-group increment-ticket">
                                                    <input type="file" name="filename[]" class="form-control" />
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-success btn-success-ticket" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                                    </div>
                                                </div>
                                                <div class="clone hide" style="display:none">
                                                    <div class="control-group input-group" style="margin-top: 10px;">
                                                        <input type="file" name="filename[]" class="form-control" />
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-danger btn-danger-ticket" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           
                                            <div class="row" style="display:none">
                      

                                                <div class="col-md-6 mb-2 text-right">
                                                    <div class="form-group delay-due-date">
                                                        <div id="demo-dp-txtinput_duedate" class="input-group date">
                                                            <input type="text" class="date form-control" name="updated_due_date" id="updated_due_date" placeholder="Select Revised Due Date" value="" autocomplete="off" />
                                                            <span class="input-group-addon"><i class="demo-pli-calendar-4 jcal2"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-2 text-right">
                                                    <input class="btn btn-primary text-right" type="submit" value="Submit" />
                                                </div>
                                            </div>
                                          

                                            <div class="modal-footer">
                                                <input type="hidden" name="ticket_assign_id" id="ticket_assign_id" value="" />
                                                <input type="hidden" name="ticketresponse_button_action" id="ticketresponse_button_action" value="insert" />
                                                <input type="submit" name="submit" id="ticketresponse_action" value="Save" class="btn btn-info" />
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @endsection

                            <script>
                                var hostUrl = "assets/";
                            </script>

                            <script src="assets/plugins/global/plugins.bundle.js"></script>
                            <script src="assets/js/scripts.bundle.js"></script>
                            <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $(".date").daterangepicker({
                                        singleDatePicker: true,
                                        showDropdowns: true,
                                        minYear: 1901,
                                        maxYear: parseInt(moment().format("YYYY"), 12),
                                    });
                                });

                                $(document).ready(function () {
                                    $("#hiderow").show();
                                    $("#category_id").change(function () {
                                        var category_id = $(this).val();
                                        var role = "{{ $user_role }}";
                                        if (category_id == 1) {
                                            $(".priority").hide();
                                            $("select[multiple]").empty();
                                            $("#proj_list").css("display", "block");
                                            if (role == "Approver") {
                                                $("#impacted_tasks").css("display", "block");
                                                $("#approver_div").css("display", "block");
                                            }
                                            $("#hiderow").hide();
                                        } else {
                                            $("#proj_list").css("display", "none");
                                            $("#impacted_tasks").css("display", "none");
                                            $("#approver_div").css("display", "none");
                                            $("#hiderow").show();
                                            $(".priority").show();
                                        }
                                    });

                                    $("#customer_type").change(function () {
                                        var customer = $("#customer_type").val();
                                        if (customer == "2") {
                                            $("#order_type").val("2");
                                            $("#user_type").val("2");
                                        } else {
                                            $("#order_type").val("");
                                            $("#user_type").val("");
                                        }
                                    });

                                    $("#user_type").change(function () {
                                        var user = $("#user_type").val();
                                        if (user == "2") {
                                            $("#order_type").val("2");
                                        } else {
                                            $("#order_type").val("");
                                        }
                                    });

                                    $(".btn-success-add-ticket").click(function () {
                                        var html = $(".add-clone").html();
                                        $(".increment-add-ticket").after(html);
                                    });

                                    $(".btn-danger-add-ticket").click(function () {
                                        var html = $(".add-clone").html();
                                        $(".increment-add-ticket").after(html);
                                    });

                                    $(".js-example-basic-multiple").select2();

                                    var table = $("#assign_task_table").DataTable();
                                    //$('#assign_task_table').DataTable();

                                    function assign_task_datatable(status) {
                                        var _token = $('input[name="_token"]').val();

                                        $("#assign_task_table").DataTable({
                                            processing: true,
                                            serverSide: true,
                                            destroy: true,
                                            ajax: {
                                                url: "{{ route('tickets.gettickets') }}",

                                                data: { status: status, _token: _token },
                                            },

                                            columns: [
                                                { data: "ticketid" },

                                                {
                                                    data: "title",
                                                    render: function (data, type, row) {
                                                        return '<a href="#" class="btn-md ticket-edit" id="' + row.id + '" >' + data + "</a>";
                                                    },
                                                },

                                                { data: "projectname" },

                                                { data: "opened_by_name" },
                                                { data: "assigned_to_name" },

                                                { data: "due_date" },

                                                { data: "update_est_tat" },

                                                { data: "tickettype" },
                                                { data: "priority_name" },
                                                { data: "effort_name" },
                                                // { "data": "task_comments" },

                                                { data: "task_status_name" },
                                                // { "data": "action", orderable:false, searchable: false},
                                            ],
                                            columnDefs: [
                                                {
                                                    targets: [0, 2, 3, 4, 5, 6, 7, 8, 9],
                                                    className: "text-center",
                                                },
                                            ],

                                            bDestroy: true,
                                        });
                                    }

                                    assign_task_datatable("{{ $status }}");

                                    $(document).on("click", ".ticketype", function (event) {
                                        event.preventDefault();

                                        var ticketype = $(this).attr("href");

                                        assign_task_datatable(ticketype);

                                        //$('#testTable').DataTable().draw();
                                    });

                                    // $(document).on("click","#tab-assign-task",function() {

                                    //     assign_task_datatable();

                                    //     //$('#testTable').DataTable().draw();
                                    // });

                                    function assign_task_type_datatable(status) {
                                        var _token = $('input[name="_token"]').val();

                                        $("#assign_task_table").DataTable({
                                            processing: true,
                                            serverSide: true,
                                            destroy: true,
                                            ajax: {
                                                url: "{{ route('tickets.gettickets') }}",

                                                data: { status: status, _token: _token },
                                            },

                                            columns: [
                                                { data: "ticketid" },
                                                {
                                                    data: "title",
                                                    render: function (data, type, row) {
                                                        return '<a href="#" class="btn-md ticket-edit" id="' + row.id + '" >' + data + "</a>";
                                                    },
                                                },
                                                { data: "projectname" },
                                                { data: "opened_by_name" },
                                                { data: "assigned_to_name" },
                                                { data: "due_date" },
                                                { data: "update_est_tat" },
                                                { data: "tickettype" },
                                                { data: "priority_name" },
                                                { data: "effort_name" },
                                                { data: "task_status_name" },
                                                // { "data": "action", orderable:false, searchable: false},
                                            ],
                                            columnDefs: [
                                                {
                                                    targets: [0, 2, 3, 4, 5, 6, 7, 8, 9],
                                                    className: "text-center",
                                                },
                                            ],

                                            bDestroy: true,
                                        });
                                    }

                                    assign_task_type_datatable("{{ $status }}");

                                    $(document).on("click", ".ticketype", function (event) {
                                        event.preventDefault();

                                        var ticketype = $(this).attr("href");

                                        assign_task_type_datatable(ticketype);
                                    });

                                    $("#add_task").click(function () {
                                        $("#assignTaskEditModal").modal("show");
                                        $("#task_edit_form")[0].reset();
                                        // $('#form_output').html('');

                                        // $('.modal-title').text('Order Book');
                                    });

                                    // $("#role_id").change(function () {
                                    //     var role_id = $(this).val();

                                    //     $("#assigned_to").empty();
                                    //     $("#assigned_to").append('<option value="" >-Select-</option>');

                                    //     if (role_id != "") {
                                    //         $.ajax({
                                    //             url: "{{ route('users.getusersbyrole') }}",
                                    //             method: "GET",
                                    //             data: { role_id: role_id },
                                    //             success: function (result) {
                                    //                 //$('#county').html(result);

                                    //                 $.each(result, function (key, value) {
                                    //                     $("#assigned_to").append('<option value="' + key + '">' + value + "</option>");
                                    //                 });
                                    //             },
                                    //         });
                                    //     }
                                    // });

                                    $("#filter_role_id").change(function () {
                                        var role_id = $(this).val();

                                        $("#filter_assigned_to").empty();
                                        $("#filter_assigned_to").append('<option value="" >-Select-</option>');

                                        if (role_id != "") {
                                            $.ajax({
                                                url: "{{ route('users.getusersbyrole') }}",
                                                method: "GET",
                                                data: { role_id: role_id },
                                                success: function (result) {
                                                    //$('#county').html(result);

                                                    $.each(result, function (key, value) {
                                                        $("#filter_assigned_to").append('<option value="' + key + '">' + value + "</option>");
                                                    });
                                                },
                                            });
                                        }
                                    });

                                    $("#task_edit_form").on("submit", function (event) {
                                        event.preventDefault();
                                        //var form_data = $(this).serialize();

                                        var form_data = new FormData($("#task_edit_form")[0]);

                                        $.ajax({
                                            url: "{{ route('tickets.store') }}",
                                            type: "POST",
                                            data: form_data,
                                            dataType: "json",
                                            processData: false,
                                            contentType: false,
                                            success: function (data) {
                                                if (data.error.length > 0) {
                                                    var error_html = "";
                                                    for (var count = 0; count < data.error.length; count++) {
                                                        error_html += '<div class="alert alert-danger">' + data.error[count] + "</div>";
                                                    }
                                                    // $('#form_output').html(error_html);
                                                } else {
                                                    $("#task_edit_form")[0].reset();
                                                    $("#action").val("Add");
                                                    $(".modal-title").text("Add Data");
                                                    $("#button_action").val("insert");
                                                    $("#assign_task_table").DataTable().ajax.reload();
                                                    $("#assignTaskEditModal").modal("hide");
                                                   

                                                    window.location.href = "{{ route('tickets',['status' => 'Open-1'])}}";
                                                }
                                            },
                                        });
                                    });

                                    $("#taskfilter_form").on("submit", function (e) {
                                        //  oTable.draw();
                                        //e.preventDefault();

                                        $("#assign_task_table").DataTable().ajax.reload();
                                        e.preventDefault();
                                    });
                                });
                            </script>

                            <script type="text/javascript">
                                $(function () {
                                    $("#taskEditModal").on("hidden.bs.modal", function () {
                                        // location.reload();;
                                        $("#response_status").val("");
                                        $(".approved_to").css("display", "none");
                                        $(".assigned_to").css("display", "none");
                                        $(".assigned_to_optit_class").css("display", "none");
                                        $(".category_optit_class").css("display", "none");
                                    });

                                    $(".ticket-delay-due-date").hide();
                                    $(".assigned_to").hide();
                                    $(".approved_to").hide();
                                    $(".assigned_to_optit_class").hide();
                                    $(".category_optit_class").hide();

                                    $(".btn-success-ticket").click(function () {
                                        var html = $(".clone").html();
                                        $(".increment-ticket").after(html);
                                    });

                                    $(".btn-danger-ticket").click(function () {
                                        var html = $(".clone").html();
                                        $(".increment-ticket").after(html);
                                    });

                                    // $("body").on("click",".btn-danger-ticket",function(){
                                    //     $(this).parents(".control-group").remove();
                                    // });

                                    $("#customer_type1").change(function () {
                                        var customer = $("#customer_type1").val();
                                        if (customer == "2") {
                                            $("#user_type1").val("2");
                                            $("#order_type1").val("2");
                                        } else {
                                            $("#user_type1").val("");
                                            $("#order_type1").val("");
                                        }
                                    });
                                    $("#user_type1").change(function () {
                                        var user = $("#user_type1").val();
                                        if (user == "2") {
                                            $("#order_type1").val("2");
                                        } else {
                                            $("#order_type1").val("");
                                        }
                                    });
                                    $("#classification_use_1").change(function () {
                                        var type = $("#classification_use_1").val();
                                        if (type == "yes") {
                                            $("#classification_task_edit").css("display", "block");
                                        } else {
                                            $("#classification_task_edit").css("display", "none");
                                        }
                                    });
                                    $("#start_date").on("change", function () {
                                        var startDate = $("#start_date").val();

                                        var endDate = new Date(startDate);

                                        endDate = endDate.setDate(endDate.getDate() + 1);

                                        $("#demo-dp-txtinput_enddate input").datetimepicker({
                                            autoclose: true,
                                            format: "m/d/Y",
                                            timepicker: false,
                                            minDate: endDate,
                                        });
                                    });

                                    $(document).on("click", ".ticket-edit", function () {
                                        var id = $(this).attr("id");
                                        var tasktype = $(this).data("task");

                                        $("#form_output_new").html("");
                                        $.ajax({
                                            url: "{{ route('tickets.getticketdetails') }}",
                                            method: "get",
                                            data: { id: id },
                                            dataType: "json",
                                            success: function (data) {
                                                // var ignoreArray = ["id"];
                                                // $.each(data, function( key, value ) {
                                                //   if($.inArray(key, ignoreArray) == -1 ){
                                                //       $('#'+key).val(value);
                                                // }

                                                // });
                                                $("#category_id_new").val(data.category_id);
                                                if (data.category_id == "1") {
                                                    $("#category_id").val(1);
                                                    $("#response_status").empty();
                                                    $("#response_status").append("<option value=''>Select</option>");
                                                    $.each(data.allowed_status, function (index, value) {
                                                        $("#response_status").append("<option value=" + value.status_id + ">" + value.status + "</option>");
                                                    });
                                                    $.each(data.project_list, function (index, value) {
                                                        if (data.proj_id == value.id) {
                                                            $("#project_list").append("<option value=" + value.id + " selected>" + value.project_name + "</option>");
                                                        } else {
                                                            $("#project_list").append("<option value=" + value.id + ">" + value.project_name + "</option>");
                                                        }
                                                    });

                                                    $("#update_assigned_to").empty();
                                                    $("#update_assigned_to").append("<option>Select</option>");
                                                    $.each(data.team_members, function (index, value) {
                                                        $("#update_assigned_to").append("<option value=" + value.id + ">" + value.firstname + " " + value.lastname + "</option>");
                                                    });
                                                    $.each(data.roles, function (index, value) {
                                                        $("#clarification_role").append("<option value=" + value.id + ">" + value.name + "</option>");
                                                    });

                                                    $.each(data.categories, function (index, value) {
                                                        if (data.category_id == value.id) {
                                                            $("#department").append("<option value=" + value.id + " selected>" + value.name + "</option>");
                                                        } else {
                                                            $("#department").append("<option value=" + value.id + ">" + value.name + "</option>");
                                                        }
                                                    });
                                                    $("#classification_task_edit").hide();
                                                    $("#update_type").empty();
                                                    $("#update_type").append("<option value=''>Select</option>");
                                                    $.each(data.ticket_type, function (index, value) {
                                                        $("#update_type").append("<option value=" + value.id + ">" + value.type + "</option>");
                                                    });
                                                    $("#order_type1").append("<option value=''>Select</option>");
                                                    $.each(data.impacted_orders, function (index, value) {
                                                        $("#order_type1").append("<option value=" + value.id + ">" + value.name + "</option>");
                                                    });
                                                    $("#customer_type1").append("<option value=''>Select</option>");
                                                    $.each(data.impacted_customer, function (index, value) {
                                                        $("#customer_type1").append("<option value=" + value.id + ">" + value.name + "</option>");
                                                    });
                                                    $("#ticket_type1").append("<option value=''>Select</option>");
                                                    $.each(data.impacted_task_type, function (index, value) {
                                                        $("#ticket_type1").append("<option value=" + value.id + ">" + value.name + "</option>");
                                                    });
                                                    $("#user_type1").append("<option value=''>Select</option>");
                                                    $.each(data.impacted_user, function (index, value) {
                                                        $("#user_type1").append("<option value=" + value.id + ">" + value.name + "</option>");
                                                    });
                                                    if (data.approver == 0) {
                                                        $("#priority-change").css("display", "none");
                                                    }
                                                }
                                                if (data.category_id == "4") {
                                                    // $("#assigned_to_optit").append("<option value=''>Select</option>")
                                                    $("#response_status").empty();
                                                    $("#response_status").append('<option value="">-- Update Status --</option>');
                                                    $("#response_status").append('<option value="12">Started</option>');
                                                    $("#response_status").append('<option value="7">Closed</option>');

                                                    // $("#category_optit").append("<option value=''>Select</option>")
                                                    $.each(data.optit_category, function (index, value) {
                                                        if (data.optit_category_select == value.category) {
                                                            $("#category_optit").append('<option value="' + value.category + '" selected>' + value.category + "</option>");
                                                        } else {
                                                            $("#category_optit").append('<option value="' + value.category + '">' + value.category + "</option>");
                                                        }
                                                    });
                                                    if (data.optit_category_select != "") {
                                                        categorychange(data.optit_subcategory_select);
                                                    }
                                                    $.each(data.optit_users, function (index, value) {
                                                        if (data.assigned_to_optit == value.id) {
                                                            $("#assigned_to_optit").append('<option value="' + value.id + '" selected>' + value.firstname + " " + value.lastname + "</option>");
                                                        } else {
                                                            $("#assigned_to_optit").append('<option value="' + value.id + '">' + value.firstname + " " + value.lastname + "</option>");
                                                        }
                                                    });
                                                    if (data.optit_item_select != "") {
                                                        subcategory_change(data.optit_item_select, data.optit_subcategory_select);
                                                    }
                                                }
                                                $("#task_name_view").html(data.title);
                                                $("#task_name_hidden").val(data.title);
                                                $("#open_date_view").html(data.open_date);
                                                $("#created_at_veiw").html(data.created_noofdays);
                                                $("#opened_by_name_view").html(data.opened_by_name);
                                                $("#due_date_view").html(data.due_date_org);
                                                $("#delayed_date_view").html(data.delayed_noofdays);
                                                $("#task_comments_view").html(data.description);
                                                $("#updated_at_veiw").html(data.lastupdated_noofdays);
                                                $("#created_at_view").html(data.created);
                                                $("#impact_task_type").html(data.this_impacted_task_type);
                                                $("#impact_order").html(data.this_impacted_order);
                                                $("#impact_customer").html(data.this_impacted_customer);
                                                $("#impact_user").html(data.this_impacted_user);
                                                $("#impact_tat").html(data.tat);

                                                //    $('#task_attachments').html(data.task_attachments);

                                                $("#category_veiw").html('<span style="color:' + data.ccolor + '" >' + data.cname + "</span>");
                                                $("#priority_veiw").html('<span style="color:' + data.pcolor + '" >' + data.pname + "</span>");
                                                $("#status_veiw").html('<span style="color:' + data.scolor + '" >' + data.sname + "</span>");

                                                if (data.task_attachments != null) {
                                                    $("#task_attachments").html("");
                                                    var attchments = data.task_attachments.split(",");
                                                    $.each(attchments, function (index, value) {
                                                        $("#task_attachments").append('<a href="/download/tickets/' + value + '" target="_blank" class="attachedfiles" >' + value + "</a>");
                                                    });
                                                } else {
                                                    $("#task_attachments").html("No Attachments found.");
                                                }

                                                //   $.each(attchments,function(key,value){

                                                // $("#task-details-data").append('<a href="" >'+value+'</a>');
                                                //  }
                                                //$('#demo-summernote').summernote('code', data.special_instruction);

                                                $("#assigned_to_name_view").html(data.assigned_to_name);
                                                $("#task_status_name_view").html(data.task_status_name);

                                                if (data.task_status_name != "Closed" && data.assignuser == 1) {
                                                    $(".response-form").show();
                                                    $("#taskresponse_action").show();
                                                } else {
                                                    $(".response-form").hide();
                                                    $("#taskresponse_action").hide();
                                                }

                                                // $("#task-details-data").empty();
                                                // if(data.taskdetails.length > 0 ){
                                                //     $('.task-details-table').show();
                                                // }else{
                                                //     $('.task-details-table').hide();
                                                // }

                                                $("#prioritylabel").html('<label class="badge badge-' + data.pcolor + '">' + data.pname + "</label>");

                                                $("#displaycomments").empty();
                                                $.each(data.taskcomments, function (key, value) {
                                                    if (value.updated_due_date == null || value.updated_due_date == "") {
                                                        value.updated_due_date = "";
                                                    }

                                                    // $("#updated_due_date").append(' <tr><td>'+(key+1)+'</td><td>'+value.fullname+'</td><td>'+value.response+'</td><td>'+value.response_date+'</td> <td>'+value.taskdetail_status_name+'</td><td>'+value.updated_due_date+'</td></tr>');

                                                    $("#displaycomments").append(
                                                        ' <div class="panel panel-default"><div class="panel-heading"><h3 class="panel-title">' +
                                                            value.fullname +
                                                            '<span class="pull-right">' +
                                                            data.lastupdated_noofdays +
                                                            '</span></h3></div><div class="panel-body"><div class="content"><p>' +
                                                            value.comments +
                                                            '</p>  <p style="margin-bottom: 0px; padding-bottom: 0px;"  class="task_attachments_' +
                                                            value.id +
                                                            '" >&nbsp;&nbsp;<strong>Attachments</strong> : <span id="task_attachments_' +
                                                            value.id +
                                                            '"></span></p></div></div></div>'
                                                    );

                                                    if (value.attachments != null) {
                                                        var attchments = value.attachments.split(",");

                                                        $.each(attchments, function (index, value1) {
                                                            $("#task_attachments_" + value.id).append('<a href="/download/tickets/' + value1 + '" target="_blank" class="attachedfiles" >' + value1 + "</a>");
                                                        });
                                                    } else {
                                                        $(".task_attachments_" + value.id).hide();
                                                    }
                                                });

                                                $(".ticket-notification-" + id).hide();
                                                $("#taskEditModal").modal("show");
                                                $("#taskresponse_action").val("Save");
                                                $("#ticket_assign_id").val(data.id);
                                                $("#tasktype").val(tasktype);

                                                // $('.modal-title').text('Order Table Details');
                                                // $('#taskresponse_button_action').val('update');
                                            },
                                        });
                                    });

                                    $("#response_status").change(function () {
                                        var category = $("#category_id_new").val();
                                        var val = $(this).val();
                                        $("#progress").css("display", "none");
                                        $("#clarification_role_div").css("display", "none");
                                        $("#clarification_user_div").css("display", "none");
                                        $(".ticket-delay-due-date").hide();
                                        $(".assigned_to").hide();
                                        $(".approved_to").hide();
                                        $(".assigned_to_optit_class").hide();
                                        $(".category_optit_class").hide();
                                        $(".note-editor").css("display", "block");
                                        $(".increment-ticket").show();
                                        $("#priority-change").css("display", "none");

                                        if (val == 6) {
                                            $(".ticket-delay-due-date").show();
                                        } else if (val == 11) {
                                            $(".assigned_to").show();
                                        } else if (val == 9) {
                                            //alert(11);
                                            $(".approved_to").show();
                                            $("#classification_task_edit").hide();
                                        } else if (val == 16) {
                                            $("#clarification_role_div").css("display", "block");
                                        } else if (val == 12) {
                                            if (category != 4) {
                                                $(".note-editor").css("display", "none");
                                                $(".increment-ticket").hide();
                                            } else {
                                                $(".assigned_to_optit_class").css("display", "block");
                                                $(".category_optit_class").css("display", "block");
                                            }
                                        } else if (val == 7) {
                                            if (category == 4) {
                                                $(".assigned_to_optit_class").css("display", "block");
                                                $(".category_optit_class").css("display", "block");
                                            }
                                        }
                                    });
                                    $("#clarification_role").change(function () {
                                        $("#clarification_user_div").css("display", "block");
                                        var role = $(this).val();
                                        $.ajax({
                                            url: "{{ route('tickets.getusers') }}",
                                            type: "GET",
                                            data: { role: role },
                                            dataType: "json",
                                            success: function (data) {
                                                $("#clarification_to").empty();
                                                $.each(data, function (index, value) {
                                                    $("#clarification_to").append("<option value=" + value.id + ">" + value.firstname + "</option>");
                                                });
                                            },
                                        });
                                    });
                                    $("#ticket_response_form").on("submit", function (event) {
                                        event.preventDefault();
                                        //   var form_data = $(this).serialize();

                                        var form_data = new FormData($("#ticket_response_form")[0]);

                                        $.ajax({
                                            url: "{{ route('tickets.store') }}",
                                            type: "POST",
                                            data: form_data,
                                            dataType: "json",
                                            processData: false,
                                            contentType: false,
                                            success: function (data) {
                                                if (data.error.length > 0) {
                                                    var error_html = "";
                                                    for (var count = 0; count < data.error.length; count++) {
                                                        error_html += '<div class="alert alert-danger">' + data.error[count] + "</div>";
                                                    }
                                                    $("#form_output_new").html(error_html);
                                                } else {
                                                    $("#ticket_response_form")[0].reset();
                                                    $("#ticketresponse_action").val("Add");
                                                    $(".modal-title").text("Add Data");
                                                    $("#ticketresponse_button_action").val("insert");
                                                    $('#assign_task_table').DataTable().ajax.reload();
                                                    $("#taskEditModal").modal("hide");

                                                    if(data.responsedata.length > 0){

                                                      $("."+tasktype).empty();
                                                      $.each(data.responsedata,function(key,value){
                                                          $("."+tasktype).append('<div class="list-group" style="padding: 0px"><div class="list-group-item" style="border: 0px; border-bottom: 1px solid;    padding: 10px 15px 5px 15px;"><span class="badge bg-info task-edit"  data-task="'+tasktype+'" id="'+value.id+'" style="font-size: 1.2em; cursor: pointer;">Action</span><p style="margin-bottom: 0px">'+value.task_name+'</p></div> <div class="list-group-item" style="border: 0px; padding: 5px 15px 10px 15px"><span class="badge bg-default" style="background: transparent;color: #ccc;">'+value.due_date+'</span><p style="margin-bottom: 0px; color: #ccc;">Assigned by:'+value.fullname+'</p></div><hr style="margin: 0.5rem auto;"></div>');
                                                      });
                                                    }else if(response_status ==2){
                                                           var tasktext = "No Tasks";
                                                           if(tasktype=="overduetasks"){
                                                             tasktext = "No Overdue Tasks";
                                                           }else if(tasktype=="todaytasks"){
                                                             tasktext = "No Tasks for the day";
                                                           }else if(tasktype=="upcomingtasks"){
                                                              tasktext = "No Upcoming Tasks";
                                                           }
                                                           $("."+tasktype).html('<br/><center><img src="{{ asset('img/notasks.png') }}" style="width:100px" class="img-responsive" /></center><p style="text-align: center;font-size: 16px; font-weight: bold;">'+tasktext+'</p>');
                                                    }

                                                   
                                                    window.location.href = "{{ route('tickets',['status' => 'Open-1'])}}";
                                                }
                                            },
                                        });
                                    });
                                });
                            </script>

                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
