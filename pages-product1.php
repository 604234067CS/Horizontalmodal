<?php include 'layouts/header.php'; ?>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="public/assets/plugins/morris/morris.css">

<?php include 'layouts/headerStyle.php'; ?>

<body>
    <?php include 'layouts/loader.php'; ?>

    <?php include 'layouts/navbar.php'; ?>

    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item active">Products List</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Products List
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">
                                Add Product
                            </button></h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <!-- ปุ่่ม Add ข้อมูล ProductModal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="ConnectData/pages-product-db.php" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label> Product Name </label>
                                    <input type="text" name="product_name" class="form-control" placeholder="Enter name" required>
                                </div>

                                <div class="form-group">
                                    <label> Price </label>
                                    <input type="text" name="product_price" class="form-control" placeholder="Enter name" required>
                                </div>

                                <div class="form-group">
                                    <label> Description </label>
                                    <input type="text" name="product_descirption" class="form-control" placeholder="Enter name" required>
                                </div>

                                <div class="form-group">
                                    <label> Stock </label>
                                    <input type="number" name="product_stock" class="form-control" placeholder="Enter name" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="Submit" name="save_AddData" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- /.ตารางแสดงข้อมูล -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                require 'ConnectData/pages-gallery-connectdb.php';

                                $query = "SELECT * FROM db_product";
                                $query_run = mysqli_query($conn, $query);

                                ?>
                                <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                            <th>descirption</th>
                                            <th>stock</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (mysqli_num_rows($query_run) > 0) {
                                            while ($row = mysqli_fetch_assoc($query_run)) {
                                        ?>
                                                <tr>
                                                    <td><?php echo $row['db_product_id']; ?> </td>
                                                    <td><?php echo $row['db_product_name']; ?> </td>
                                                    <td><?php echo $row['db_product_price']; ?> </td>
                                                    <td><?php echo $row['db_product_date']; ?> </td>
                                                    <td><?php echo $row['db_product_description']; ?> </td>
                                                    <td><?php echo $row['db_product_num']; ?> </td>
                                                    <td>
                                                        <form action="pages-product1-edit.php" method="post">
                                                            <input type="hidden" name="edit_id" value="<?php echo $row['db_product_id']; ?>">
                                                            <button type="submit" name="edit_btn" class="btn btn-outline-success" ><i class="mdi mdi-pencil font-18"></i></button>
                                                        </form>
                                                    </td>

                                                    <td>
                                                        <form>
                                                            <button type="submit" class="btn btn-outline-danger"><i class="mdi mdi-close font-18"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "No Record Found";
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

    <?php include 'layouts/footer.php'; ?>

    <?php include 'layouts/footerScript.php'; ?>

    <!-- App js -->
    <script src="public/assets/js/app.js"></script>


</body>

</html>