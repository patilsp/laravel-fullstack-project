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
              <h2 class="d-flex align-items-center">Permissions<span class="text-gray-600 fs-6 ms-1"></span></h2>
          </div>

          <div class="card-toolbar">
              <div class="d-flex align-items-center position-relative me-4">
                  <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text"  class="form-control form-control-solid w-250px ps-15" placeholder="Search Permissions" />
              </div>
              <div class="d-flex ms-3">
                <a href="#" class=" btn bg-body btn-color-gray-600 btn-active-info" tooltip="Add New Role" id="add_data">
                    Add Permission
                </a>
            </div>

          </div>
      </div>


        <div class="card-body pt-0">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="permissions_table">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                
                                <th class="min-w-50px sorting">ID</th>
                                <th class="min-w-150px sorting">Permission Name</th>
                                <th class="min-w-125px sorting">Created Date</th>
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


<div class="modal fade" id="permissionsEditModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fs-1=2">Add Permissions</h2>

                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-lg-5 my-7">
                <form method="post" id="permissions_edit_form" class="form">

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
                                <span class="required">Permissions Name</span>
                            </label>

                            <input class="form-control form-control-solid" placeholder="Enter a permissions name" name="name" />
                        </div>
                    </div>

                    <div class="text-center pt-15">
                        <input type="hidden" name="role_id" id="role_id" value="" />
                        <input type="hidden" name="button_action" id="button_action" value="insert" />
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
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


    $("#permissions_table").DataTable({
        processing: true,
        searching: true,
        paging: true,
        pageLength: 10,

        ajax: {
            url: "{{ route('permissions.getall') }}",
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
    $("#permissionsEditModal").modal("show");
    $("#permissions_edit_form")[0].reset();
    $("#form_output").html("");
    $("#button_action").val("insert");
    $("#action").val("Add");
    $(".modal-title").text("Role - Add");
});

$("#permissions_edit_form").on("submit", function (event) {
    event.preventDefault();
    var form_data = $(this).serialize();
    $.ajax({
        url: "{{ route('permissions.store') }}",
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
                $("#permissions_edit_form")[0].reset();
                $("#action").val("Add");
                $(".modal-title").text("Role - Add");
                $("#button_action").val("insert");
                $("#permissions_table").DataTable().ajax.reload();
                $("#permissionsEditModal").modal("hide");
                alert("Updated Successfully");
            }
        },
    });
});

$(document).on("click", ".edit", function () {
    var id = $(this).attr("id");

    $("#form_output").html("");
    $.ajax({
        url: "{{ route('permissions.getdata') }}",
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
            $("#permissions_id").val(id);
            $("#permissionsEditModal").modal("show");
            $("#action").val("Save");
            $(".modal-title").text("Role - Edit");
            $("#button_action").val("update");
        },
    });
});

$(document).on("click", ".delete", function () {
    var id = $(this).attr("id");

    $.ajax({
        url: "{{route('permissions.delete')}}",
        method: "get",
        data: { id: id },
        success: function (data) {
            alert("Deleted Successfully");
            $("#permissions_table").DataTable().ajax.reload();
        },
    });
});

</script>
