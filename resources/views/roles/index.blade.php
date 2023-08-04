@extends('layouts.master')


@section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

@endsection

@section('content')
          <div id="kt_app_content_container" class="app-container container-xxl mt-4">
                       
              <div class="card card-flush mb-2 mb-xl-12">
                       <table border='1' align='center' id='roles_table' class='table table-bordered table-striped'>
                   <thead>
                     <tr>
                       <th align='center'>id</th>
                       <th align='center'>Name</th>
                       <th align='center'>Created At</th>
                       <th align='center'>
                         <button type="button" name="add" id="add_data" data-func="dt-add"  class="btn btn-md dt-add" ><span class="bi bi-plus" aria-hidden="true"></span></button>
                       </th>
                     </tr>
                   </thead>
                   <tbody>
                   </tbody>
                 </table>
                      
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

    $(document).ready(function() {

        $('#roles_table').DataTable({
            processing: true,
            serverSide: false,
            ajax: {
                url: "{{ route('roles.getall') }}",
            },
            columns: [
                { data: "id" },
                { data: "name" },
                { data: "created_at" },
                { data: "action", orderable: true, searchable: false }
            ],
            columnDefs: [
                {
                    targets: "_all",
                    className: "text-center",
                },
            ],
        });
    });




    $(document).on('click', '#add_data', function(){

        $('#roleEditModal').modal('show');
        $('#roles_edit_form')[0].reset();
        $('#form_output').html('');
        $('#button_action').val('insert');
        $('#action').val('Add');
        $('.modal-title').text('Role - Add');
    });

$('#roles_edit_form').on('submit', function(event){
event.preventDefault();
var form_data = $(this).serialize();
$.ajax({
    url:"{{ route('roles.store') }}",
    type:"POST",
    data:form_data,
    dataType:"json",
    success:function(data)
    {
        if(data.error.length > 0)
        {
            var error_html = '';
            for(var count = 0; count < data.error.length; count++)
            {
                error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
            }
            $('#form_output').html(error_html);
        }
        else
        {
            $('#form_output').html(data.success);
            $('#roles_edit_form')[0].reset();
            $('#action').val('Add');
            $('.modal-title').text('Role - Add');
            $('#button_action').val('insert');
            $('#roles_table').DataTable().ajax.reload();
            $('#roleEditModal').modal('hide');
            alert('Updated Successfully');
        }
    }
})
});

$(document).on('click', '.edit', function(){
var id = $(this).attr("id");

$('#form_output').html('');
$.ajax({
    url:"{{ route('roles.getdata') }}",
    method:'get',
    data:{id:id},
    dataType:'json',
    success:function(data)
    {
        var ignoreArray = ["id","created_at","updated_at"];
        $.each(data, function( key, value ) {
          if($.inArray(key, ignoreArray) == -1 ){
              $('#'+key).val(value);
        }

        });
        $('#role_id').val(id);
        $('#roleEditModal').modal('show');
        $('#action').val('Save');
        $('.modal-title').text('Role - Edit');
        $('#button_action').val('update');
    }
})
});

$(document).on('click', '.delete', function(){
var id = $(this).attr('id');

 $.ajax({
     url:"{{route('roles.delete')}}",
     method:'get',
     data:{id:id},
     success:function(data)
     {

          alert('Deleted Successfully');
          $('#roles_table').DataTable().ajax.reload();

      }
  });


 });


</script>
