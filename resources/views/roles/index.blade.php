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
                         <button type="button" name="add" id="add_data"   class="btn btn-md dt-add" ><span class="bi bi-plus" aria-hidden="true"></span></button>
                       </th>
                     </tr>
                   </thead>
                   <tbody>
                   </tbody>
                 </table>
                      
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

  </script>
