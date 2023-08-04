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

          </div>
      </div>


        <div class="card-body pt-0">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="roles_table">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                
                                <th class="min-w-50px sorting">ID</th>
                                <th class="min-w-150px sorting">Role Name</th>
                                <th class="min-w-125px sorting">Joined Date</th>
                                <th class="text-end min-w-100px sorting_disabled">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600"></tbody>
                    </table>
                </div>
    
            </div>
        </div>
    </div>
</div>

 

  <div id="roleEditModal" class="modal fade" role="dialog">

    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="roles_edit_form">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                  <h4 class="modal-title">Role - Add</h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <span id="form_output"></span>
                    <div class="row">

                        <div class="col-sm-12">

                            <div class="form-group">

                                <label class="control-label" for="name">Role Name</label>
                                <input type="text" name="name"  id="name" class="form-control" placeholder="">
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">


                    <input type="hidden" name="role_id" id="role_id" value="" />
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>



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


    $("#roles_table").DataTable({
        processing: true,
        searching: true,
        paging: true,
        pageLength: 10,

        ajax: {
            url: "{{ route('roles.getall') }}",
        },
        columns: [{ data: "id" }, { data: "name" }, { data: "created_at" }, { data: "action", orderable: true, searchable: true }],
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
