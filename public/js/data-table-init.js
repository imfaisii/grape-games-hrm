function makeDT(classNme, columnDefs, route = "") {
    $("." + classNme).DataTable({
        order: [],
        processing: true,
        serverSide: true,
        ajax: route == "" ? window.location.href : window.location.href + route,
        columns: columnDefs,
        dom: "Bfrtip",
        buttons: [
            {
                extend: "excelHtml5",
                className: "btn btn-danger",
                exportOptions: {
                    columns: ":not(:last-child)",
                },
            },
            {
                extend: "csvHtml5",
                className: "btn btn-secondary",
            },
            {
                extend: "pdfHtml5",
                className: "btn btn-info",
                orientation : 'landscape',
                pageSize : 'A0',
                // exportOptions: {
                //     columns: ":not(:last-child)",
                // },
            },
        ],
    });
}

function makeDTnAjax(classNme) {
    $("." + classNme).DataTable({
        dom: "Bfrtip",
        buttons: [
            {
                extend: "excelHtml5",
                className: "btn btn-danger",
                exportOptions: {
                    columns: ":not(:last-child)",
                },
            },
            {
                extend: "csvHtml5",
                className: "btn btn-secondary",
            },
            {
                extend: "pdfHtml5",
                className: "btn btn-info",
                orientation : 'landscape',
                pageSize : 'A0',
                // exportOptions: {
                //     columns: ":not(:last-child)",
                // },
            },
        ],
    });
}
