<?php include 'layouts/header.php'; ?>

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
                                    <li class="breadcrumb-item active">Product Type</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Product Type</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="product-list-box">
                                            <a href="javascript:void(0);">
                                                <img src="public/assets/images/products/1.jpg" class="img-fluid" alt="work-thumbnail">
                                            </a>
                                            <div class="detail">
                                                <h4 class="font-16"><a href="" class="text-dark">Riverston Glass Chair</a> </h4>

                                                <a href="#" class="btn btn-success btn-sm">Edit</a>
                                                <a href="#" class="btn btn-secondary btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </div>
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