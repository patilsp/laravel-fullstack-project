@extends('layouts.master')


@section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-4">
  
    <div class="card card-flush mb-6 mb-xl-9">
      <div class="card-header pt-5">
          <div class="card-title">
              <h2 class="d-flex align-items-center">Roles<span class="text-gray-600 fs-6 ms-1"></span></h2>
          </div>

          <div class="card-toolbar">
              <div class="d-flex align-items-center position-relative me-4">
                  <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text"  class="form-control form-control-solid w-250px ps-15" placeholder="Search Roles" />
              </div>
              <div class="user_role w-px-200 pb-3 pb-sm-0 me-2">
              <select id="UserRole" class="form-select text-capitalize">
                  <option value=""> Select Role </option>
                  <option value="Admin" class="text-capitalize">Admin</option>
                  <option value="Author" class="text-capitalize">Author</option>
                  <option value="Editor" class="text-capitalize">Editor</option>
                  <option value="Maintainer" class="text-capitalize">Maintainer</option>
                  <option value="Subscriber" class="text-capitalize">Subscriber</option>
              </select>
          </div>
          <div class="d-flex ms-3">
                <a href="#" class=" btn bg-body btn-color-gray-600 btn-active-info" tooltip="Add New Role" id="add_data">
                    Add Role
                </a>
            </div>

          </div>
      </div>


        <div class="card-body pt-0">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="roles_table">
                        <thead>
                            <tr class="text-start text-muted  fs-7 text-uppercase gs-0">
                                
                                <th class="min-w-50px sorting">ID</th>
                                <th class="min-w-150px sorting">Role Name</th>
                                <th class="min-w-125px sorting">Joined Date</th>
                                <th class="text-end min-w-100px sorting_disabled"> Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600"></tbody>
                    </table>
                </div>
    
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="roleEditModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="">Add a Role</h2>

                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-lg-5 my-7">
                <form method="post" id="roles_edit_form" class="form">

                    {{csrf_field()}}
                    <span id="form_output"></span>
                    <div
                        class="d-flex flex-column scroll-y me-n7 pe-7"
                        id="kt_modal_add_role_scroll"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_role_header"
                        data-kt-scroll-wrappers="#kt_modal_add_role_scroll"
                        data-kt-scroll-offset="300px"
                    >
                        <div class="fv-row mb-10">
                            <label class="fs-5  form-label mb-2">
                                <span class="required">Role name</span>
                            </label>

                            <input class="form-control form-control-solid" placeholder="Enter a role name" name="name" />
                        </div>

                        <div class="fv-row">
                            <label class="fs-5  form-label mb-2">Role Permissions</label>

                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <tbody class="text-gray-600 fw-semibold">
                                        <tr>
                                            <td class="text-gray-800">
                                                Administrator Access

                                                <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Allows a full access to the system">
                                                    <i class="bi bi-info-square fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="form-check form-check-custom form-check-solid me-9">
                                                    <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                    <span class="form-check-label" for="kt_roles_select_all">
                                                        Select all
                                                    </span>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">User Management</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="user_management_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="user_management_create" />
                                                        <span class="form-check-label">Create</span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Content Management</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="content_management_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="content_management_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="content_management_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Financial Management</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Reporting</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="reporting_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="reporting_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="reporting_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Payroll</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="payroll_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="payroll_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="payroll_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Disputes Management</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="disputes_management_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="disputes_management_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="disputes_management_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">API Controls</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="api_controls_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="api_controls_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="api_controls_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Database Management</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="database_management_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="database_management_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="database_management_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Repository Management</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="repository_management_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="repository_management_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="repository_management_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-15">
                        <input type="hidden" name="role_id" id="role_id" value="" />
                        <input type="hidden" name="button_action" id="button_action" value="insert" />
                        <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">
                            Discard
                        </button>

                        <button type="submit" class="btn btn-primary" name="submit" id="action" value="Add">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                        </button>
                    </div>
                </form>
            </div>
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


    $("#roles_table").DataTable({
        processing: true,
        searching: true,
        paging: true,
        pageLength: 10,

        ajax: {
            url: "{{ route('roles.getall') }}",
        },
        columns: [{ data: "id" }, { data: "name" }, { data: "formatted_created_at" }, { data: "action", orderable: true, searchable: true }],
        columnDefs: [
            {
                targets: "_all",
                className: "text-center",
            },
        ],
    });
});

$(document).on("click", "#add_data", function () {
    $("#roleEditModal").modal("show");
    $("#roles_edit_form")[0].reset();
    $("#form_output").html("");
    $("#button_action").val("insert");
    $("#action").val("Add");
    $(".modal-title").text("Role - Add");
});

$("#roles_edit_form").on("submit", function (event) {
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
        url: "{{ route('roles.store') }}",
        type: "POST",
        data: form_data,
        dataType: "json",
        success: function (data) {
            if (data.error.length > 0) {
                var error_html = "";
                for (var count = 0; count < data.error.length; count++) {
                    error_html += '<div class="alert alert-danger">' + data.error[count] + "</div>";
                }
                $("#form_output").html(error_html);
            } else {
                $("#form_output").html(data.success);
                $("#roles_edit_form")[0].reset();
                $("#action").val("Add");
                $(".modal-title").text("Role - Add");
                $("#button_action").val("insert");
                $("#roles_table").DataTable().ajax.reload();
                $("#roleEditModal").modal("hide");
                alert("Updated Successfully");
            }
        },
    });
});

$(document).on("click", ".edit", function () {
    var id = $(this).attr("id");

    $("#form_output").html("");
    $.ajax({
        url: "{{ route('roles.getdata') }}",
        method: "get",
        data: { id: id },
        dataType: "json",
        success: function (data) {
            var ignoreArray = ["id", "created_at", "updated_at"];
            $.each(data, function (key, value) {
                if ($.inArray(key, ignoreArray) == -1) {
                    $("#" + key).val(value);
                }
            });
            $("#role_id").val(id);
            $("#roleEditModal").modal("show");
            $("#action").val("Save");
            $(".modal-title").text("Role - Edit");
            $("#button_action").val("update");
        },
    });
});

$(document).on("click", ".delete", function () {
    var id = $(this).attr("id");

    $.ajax({
        url: "{{route('roles.delete')}}",
        method: "get",
        data: { id: id },
        success: function (data) {
            alert("Deleted Successfully");
            $("#roles_table").DataTable().ajax.reload();
        },
    });
});

</script>
