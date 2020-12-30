<?php include 'layouts/header.php'; ?>

<!--Morris Chart CSS -->
<link rel="stylesheet" href="public/assets/plugins/morris/morris.css">

<link href="public/assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">

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
                        </div>
                        <h4 class="page-title">Products Edit</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <!-- ปุ่่ม Edit ข้อมูล ProductModal -->
            <div class="row">
                <div class="col-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <?php
                            require_once('ConnectData/pages-product-db.php');

                            if (isset($_POST['edit_btn'])) {
                                $id = $_POST['edit_id'];
                                $query = "SELECT * FROM db_product WHERE db_product_id='$id' ";
                                $query_run = mysqli_query($conn, $query);

                                foreach ($query_run as $row) {
                            ?>
                                    <form action="ConnectData/pages-product-db.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['db_product_id']; ?>">
                                        <div class="form-group">
                                            <label> Product Name </label>
                                            <input type="text" name="edit_name" class="form-control" value="<?php echo $row['db_product_name'] ?>" placeholder="Enter name" required>
                                        </div>

                                        <div class="form-group">
                                            <label> Price </label>
                                            <input type="text" name="edit_price" class="form-control" value="<?php echo $row['db_product_price'] ?>" placeholder="Enter name" required>
                                        </div>

                                        <div class="form-group">
                                            <label> Description </label>
                                            <input type="text" name="edit_descirption" class="form-control" value="<?php echo $row['db_product_description'] ?>" placeholder="Enter name" required>
                                        </div>

                                        <div class="form-group">
                                            <label> Stock </label>
                                            <input type="number" name="edit_stock" class="form-control" value="<?php echo $row['db_product_num'] ?>" placeholder="Enter name" required>
                                        </div>
                                        <a href="pages-product1.php" class="btn btn-danger">Cancel</a>
                                        <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                                    </form>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="m-b-50">
                                <form action="ConnectData/pages-product-db.php" class="dropzone" id="frmTarget" method="post" enctype="multipart/form-data">
                                    <div class="fallback">
                                        <input name="file_name" id="file_name" type="file" multiple>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center m-t-15">
                                <button type="submit" id="startUpload" name="button" class="btn btn-primary waves-effect waves-light" href="pages-gallery.php">Upload</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light" data-dismiss="modal" onClick="javascript:location.reload();">Close</button>
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

    <script src="public/assets/plugins/dropzone/dist/dropzone.js"></script>


</body>

</html>