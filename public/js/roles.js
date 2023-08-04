$(document).ready(function() {
    console.log('jQuery is working!');

    $('#roles_table').DataTable({
        processing: true,
        serverSide: false,
        ajax: {
            url: rolesGetAllUrl,
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
