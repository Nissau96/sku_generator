<!DOCTYPE html>
<html>

<head>
    <title>SKU Code Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.css" />
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h1>SKU Code Generator</h1>
        <form method="post" action="">
            <div class="form-floating mb-3">
                <!-- <input type="text" class="form-control" id="category" name="category" placeholder="Product Category"> -->
                <select class="form-select" id="category" name="category" aria-label="Product Category">
                    <option selected>Select Product Category</option>
                    <option value="FOOTW">Footwear</option>
                    <option value="CLOTH">Clothing</option>
                    <option value="FABBG">Fabric Bags</option>
                    <option value="BDBAG">Bead Bags</option>
                    <option value="BRCLT">Bracelets</option>
                    <option value="NECKL">Necklace</option>
                    <option value="KEYHL">Key Holder</option>
                    <option value="EARRG">Ear Rings</option>
                    <option value="FLWVS">Flower Vase</option>
                    <option value="TBLMT">Table Mat</option>
                    <option value="TBLRN">Table Runners</option>
                    <option value="HWIGS">Wigs</option>
                </select>
                <label for="category">Category</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
                <label for="product_name">Product Name</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Product Description" id="product_description" name="product_description"></textarea>
                <label for="product_description">Product Description</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="regular_price" name="regular_price" placeholder="Regular Price">
                <label for="regular_price">Regular Price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="sale_price" name="sale_price" placeholder="Sale Price">
                <label for="sale_price">Sale Price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="product_weight" name="product_weight" placeholder="Product Weight">
                <label for="product_weight">Product Weight</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="product_quantity" name="product_quantity" placeholder="Product Quantity">
                <label for="product_quantity">Product Quantity</label>
            </div>
            <div class="d-grid gap-2 mb-4">
                <input class="btn btn-primary" type="submit" value="Generate SKU">
            </div>

            <!-- <label for="category">Category:</label>
            <input type="text" id="category" name="category" required><br>
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" required><br>
            <label for="product_description">Product Description:</label>
            <input type="text" id="product_description" name="product_description" required><br>
            <label for="regular_price">Regular Price:</label>
            <input type="number" id="regular_price" name="regular_price" required><br>
            <label for="sale_price">Sale Price:</label>
            <input type="number" id="sale_price" name="sale_price" required><br>
            <label for="product_weight">Product Weight:</label>
            <input type="number" id="product_weight" name="product_weight" required><br>
            <label for="product_quantity">Product Quantity:</label>
            <input type="number" id="product_quantity" name="product_quantity" required><br>
            <input type="submit" value="Generate SKU"> -->

        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $category = $_POST['category'];
            $product_name = strtoupper(substr($_POST['product_name'], 0, 5));
            $random_number = rand(0, 100);
            $random_number2 = rand(0, 500);
            $sku_code = $category . $random_number .  $product_name . $random_number2;
            echo '<div class="container mt-8">';
            echo '<h2 class="mt-4 mb-4">Generated SKU Code:</h2>';
            echo '<table id="dataTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="font-size: 14px">';
            echo '<thead class="thead-dark" style="text-align: center;">';
            echo '<tr><th>Category</th><th>SKU Code</th><th>Product Name</th><th>Product Description</th><th>Regular Price</th><th>Sale Price</th><th>Product Weight</th><th>Quantity</th></tr>';
            echo '</thead><tbody>';
            echo '<tr>';
            echo '<td>' . $_POST['category'] . '</td>';
            echo '<td>' . $sku_code . '</td>';
            echo '<td>' . $_POST['product_name'] . '</td>';
            echo '<td>' . $_POST['product_description'] . '</td>';
            echo '<td>' . $_POST['regular_price'] . '</td>';
            echo '<td>' . $_POST['sale_price'] . '</td>';
            echo '<td>' . $_POST['product_weight'] . '</td>';
            echo '<td>' . $_POST['product_quantity'] . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        }
        ?>

        <!-- Action Button (bottom right) -->
        <!-- <div class="position-fixed bottom-0 end-0 p-3">
        <button class="btn btn-primary">Generate SKU Code</button>
    </div> -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
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