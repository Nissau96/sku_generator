<!DOCTYPE html>
<html>

<head>
    <title>DataTable with Export Options</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 5 DataTables CSS -->
    <!-- <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.css" />
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Your Website</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h1>DataTable with Export Options</h1>
        <table id="dataTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="font-size: 14px">
            <thead class="thead-dark" style="text-align: center;">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>30</td>
                    <td>john.doe@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>jane.smith@example.com</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Action Button (bottom right) -->
    <div class="position-fixed bottom-0 end-0 p-3">
        <button class="btn btn-primary">Action Button</button>
    </div>

    <!-- Bootstrap 5 JavaScript (required for DataTables) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JavaScript -->
    <!-- <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.js"></script>

    <!-- Initialize DataTable -->
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "paging": true,
                "pageLength": 20,
                "lengthMenu": [
                    [20, 50, 100, -1],
                    [20, 50, 100, "All"]
                ],
                buttons: [
                    'excel'
                ],
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "iDisplayLength": 10,
                "responsive": true,
                "language": {
                    "lengthMenu": "Display _MENU_ entries",
                    "zeroRecords": "Nothing found - sorry",
                    "info": "Showing page _PAGE_ of _PAGES_",
                    "search": "_INPUT_",
                    "searchPlaceholder": "Search records",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)"
                }
            });

        });
        table.buttons().container()
            .appendTo($('.col-sm-6:eq(0)', table.table().container()));
    </script>

</body>

</html>