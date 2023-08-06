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
              <h2 class="d-flex align-items-center">Customers<span class="text-gray-600 fs-6 ms-1"></span></h2>
          </div>

          <div class="card-toolbar">
              <div class="d-flex align-items-center position-relative me-4">
                  <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text"  class="form-control form-control-solid w-250px ps-15" placeholder="Search customers" />
              </div>
             
          <div class="d-flex ms-3">
                <a href="#" class=" btn bg-body btn-color-gray-600 btn-active-info" tooltip="Add New Customer" id="add_data">
                <i class="bi bi-plus-lg me-2"></i> Add Customer
                </a>
            </div>

          </div>
      </div>


        <div class="card-body pt-0">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="customers_table">
                        <thead>
                            <tr class="text-start text-muted  fs-7 text-uppercase gs-0">
                                
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input header-checkbox" type="checkbox" id="selectAll">
                                    </div>
                                </th>
                                <th class="min-w-150px sorting">Customer Name</th>
                                <th class="min-w-150px sorting">Email</th>
                                <th class="min-w-150px sorting">Company</th>
                                <th class="min-w-125px sorting">address_line1</th>
                                <th class="min-w-125px sorting">Joined Date</th>
                                <th class="text-end min-w-100px sorting_disabled"> Action</th>
                            </tr>
                        </thead>
                        <tbody class=" text-gray-600"></tbody>
                    </table>
                </div>
    
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="modal_customer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_customer_header">
                <h2 class="">Add Customer</h2>

                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body px-5 my-7">

            <form id="modal_customer_form" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    {{csrf_field()}}
                    <span id="form_output"></span>


                    <div
                        class="d-flex flex-column scroll-y px-5 px-lg-10"
                        id="kt_modal_add_customer_scroll"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="true"
                        data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                        data-kt-scroll-offset="300px"
                        style="max-height: 14px;"
                    >
                       
                        <div class="fv-row mb-2 fv-plugins-icon-container">
                            <label class="required  fs-6 mb-2">Company Name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Company name" />
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>
                        
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="required fs-6 mb-2">Email</label>

                            <input type="email" name="email" id="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" />

                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>

                        <div class="fv-row mb-10">
                            <label class="fs-6 fw-semibold mb-2">Company</label>
                            <input type="text" class="form-control form-control-solid" placeholder="Company" name="company" id="company">
                        </div>

                                                
                            <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">
                                Shipping Information
                                <span class="ms-2 rotate-180"> <i class="bi bi-down fs-3"></i> </span>
                            </div>

                            <div id="customer_billing_info" class="collapse show">
                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">Address Line 1</label>

                                    <input class="form-control form-control-solid" placeholder="Address Line 1" name="address_line1" id="address_line1" value="" />

                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>

                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="fs-6 fw-semibold mb-2">Address Line 2</label>

                                    <input class="form-control form-control-solid" placeholder="Address Line 2" name="address_line2" id="address_line2" value="" />
                                </div>

                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                    <label class="required fs-6 fw-semibold mb-2">City</label>

                                    <input class="form-control form-control-solid" placeholder="City" name="city" id="city" value="" />

                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>

                                <div class="row g-9 mb-7">
                                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                                        <label class="required fs-6 fw-semibold mb-2">Country </label>

                                        <input class="form-control form-control-solid" placeholder="Country" name="country" id="country" value="" />

                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>

                                    <div class="col-md-6 fv-row fv-plugins-icon-container">
                                        <label class="required fs-6 fw-semibold mb-2">Post Code</label>

                                        <input class="form-control form-control-solid" placeholder="Post Code" name="pin_code" id="pin_code" value="" />

                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>
                                </div>


                                <div class="fv-row mb-7">
                                    <div class="d-flex flex-stack">
                                        <div class="me-5">
                                            <label class="fs-6 fw-semibold">Use as a billing adderess?</label>

                                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                        </div>

                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_add_customer_billing" checked="checked" />

                                            <span class="form-check-label fw-semibold text-muted" for="kt_modal_add_customer_billing">
                                                Yes
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="text-center pt-10">
                        <input type="hidden" name="customer_id" id="customer_id" value="" />
                        <input type="hidden" name="button_action" id="button_action" value="insert" />
                        <button type="reset" class="btn btn-light me-3" modal-close="close">
                            Discard
                        </button>

                        <button type="submit" class="btn btn-primary" name="submit" id="action">
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
    $("#customers_table").DataTable({
        processing: true,
        searching: true,
        paging: true,
        pageLength: 10,
        ajax: {
            url: "{{ route('customers.getall') }}",
        },
        columns: [
            {
                data: "customer_id",
                render: function (data) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3" ><input type="checkbox" class="form-check-input row-checkbox" name="customer_ids[]" value="' + data + '"></div>';
                },
                orderable: false,
                searchable: false
            },
            { data: "name" },
            { data: "email" },
            { data: "company" },
            { data: "address_line1" },
            { data: "created_at" },
            { data: "action", orderable: true, searchable: true }
        ],
        columnDefs: [
            {
                targets: "_all",
                className: "text-center",
            },
        ],
    });
});



$(document).on("click", "#add_data", function () {
    $("#modal_customer").modal("show");
    $('#modal_customer_form')[0].reset();
    $("#form_output").html("");
    $("#button_action").val("insert");
    $("#action").val("Add");
    $(".modal-title").text("Add a Customer");
});


$(document).ready(function () {
    let formValidator;
    function setupFormValidation(form) {
        formValidator = FormValidation.formValidation(form, {
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: "Customer name is required",
                        },
                    },
                },
                company: {
                    validators: {
                        notEmpty: {
                            message: "Customer company is required",
                        },
                    },
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Valid email address is required'
                        }
                    }
                },
               
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: "",
                }),
            },
        });
    }

    const form = document.getElementById("modal_customer_form");
    setupFormValidation(form);
    $("#action").on("click", function (event) {
        event.preventDefault();
        formValidator.validate().then(function (status) {
            if (status === "Valid") {
                const form_data = new FormData(form);
                $.ajax({
                    url: "{{ route('customers.store') }}", 
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
                            $("#form_output").html(error_html);
                        } else {
                            
                            const submitButton = document.getElementById("action");
                            submitButton.setAttribute("data-kt-indicator", "on");
                            submitButton.disabled = true;
                            setTimeout(function () {
                                submitButton.removeAttribute("data-kt-indicator");
                                submitButton.disabled = false;
                                Swal.fire({
                                    text: "customer has been successfully created!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                }).then(function (result) {
                                    if (result.isConfirmed) {
                                        $("#modal_customer_form")[0].reset();
                                        $("#customers_table").DataTable().ajax.reload();
                                        $("#modal_customer").modal("hide");
                                    }
                                });
                            }, 2000);                               
                        }
                    },
                    error: function () {
                        
                        console.log("AJAX error occurred");
                    },
                });
            } else {
                Swal.fire({
                    text: "Sorry, looks like there are some errors detected, please try again.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            }
        });
    });
});

$(document).on("click", ".edit", function () {
    var id = $(this).attr("id");

    $("#form_output").html("");
    $.ajax({
        url: "{{ route('customers.getdata') }}",
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
            $("#customer_id").val(id);
            $('#name').val(data.name);
            $('#customer_role').val(data.customer_role);
            $('#two_step_login').val(data.two_step_login);
            $("#modal_customer").modal("show");
            $("#action").val("Save");
            $(".modal-title").text("Update customer");
            $("#button_action").val("update");
        },
    });
});


$(document).on("click", ".delete", function () {
    var id = $(this).attr("id");
    Swal.fire({
        text: "Are you sure you want to delete this customer?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel",
        buttonsStyling: false,
        customClass: {
            confirmButton: "btn btn-primary me-3",
            cancelButton: "btn btn-light",
        },
    }).then(function (result) {
        if (result.isConfirmed) {
            deletecustomer(id);
        }
    });
});

function deletecustomer(id) {
    $.ajax({
        url: "{{ route('customers.delete') }}",
        method: "get",
        data: { id: id },
        beforeSend: function () {
            showDeleteIndicator();
        },
        success: function (data) {
            hideDeleteIndicator();
            Swal.fire({
                text: "customer has been deleted successfully!",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary",
                },
            });
            $("#customers_table").DataTable().ajax.reload();
        },
        error: function () {
            hideDeleteIndicator();
            Swal.fire({
                text: "An error occurred while deleting the customer.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary",
                },
            });
        },
    });
}

function showDeleteIndicator() {
    const deleteButton = document.querySelector(".delete");
    deleteButton.setAttribute("data-kt-indicator", "on");
    deleteButton.disabled = true;
}
function hideDeleteIndicator() {
    const deleteButton = document.querySelector(".delete");
    deleteButton.removeAttribute("data-kt-indicator");
    deleteButton.disabled = false;
}


$(document).ready(function () {
    // Handle check state
    $('#customers_select_all').on('change', function () {
        const isChecked = $(this).prop('checked');
        $('[type="checkbox"]').prop('checked', isChecked);
    });
});


$(document).ready(function () {
    const closeButton = $('[modal-close="close"]');
    closeButton.on('click', function (e) {
        e.preventDefault();

        Swal.fire({
            text: "Are you sure you would like to close?",
            icon: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Yes, close it!",
            cancelButtonText: "No, return",
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-active-light"
            }
        }).then(function (result) {
            if (result.value) {
                // Hide modal
                $('#modal_customer').modal('hide');
            }
        });
    });
});
$(document).ready(function () {
    // Header checkbox click event handler
    $('#selectAll').on('click', function () {
        // Get the checked status of the header checkbox
        const isChecked = $(this).prop('checked');
        
        // Set the checked status of all checkboxes in the TD cells
        $('.row-checkbox').prop('checked', isChecked);
    });

    // Individual row checkbox click event handler
    $('.row-checkbox').on('click', function () {
        // Check if all row checkboxes are checked
        const allChecked = $('.row-checkbox:checked').length === $('.row-checkbox').length;
        // Update the header checkbox status accordingly
        $('#selectAll').prop('checked', allChecked);
    });
});


</script>
