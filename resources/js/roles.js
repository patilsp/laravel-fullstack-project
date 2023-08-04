
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
