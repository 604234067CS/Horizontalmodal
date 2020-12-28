<?php include 'layouts/header.php'; ?>

<!--Magnific Popup CSS -->
<link rel="stylesheet" href="public/assets/plugins/magnific-popup/magnific-popup.css">

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
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">File Uploads</li>
                            </ol>
                        </div>
                        <h4 class="page-title">File Uploads</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-md-4 m-t-30">
                    <div class="text-center">
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Click Upload</button>
                    </div>
                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Upload Image</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card m-b-20">
                                                <div class="card-body">
                                                    <div class="m-b-30">
                                                        <form action="ConnectData/pages-gallery-db.php" class="dropzone" id="frmTarget" method="post" enctype="multipart/form-data">
                                                            <div class="fallback">
                                                                <input name="file_name" id="file_name" type="file" multiple>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="text-center m-t-15">
                                                        <input type="submit" id="startUpload" name="button" class="btn btn-primary waves-effect waves-light" value="Upload">
                                                        <input type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal" value="CLOSE" onClick="javascript:location.reload();">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Gallery</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Gallery</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->



            <div class="row">
                <?php
                // Include the database configuration file 
                require 'ConnectData/pages-gallery-connectdb.php';
                // Get files from the database 
                $query = "SELECT * FROM files ORDER BY id ,uploaded_on DESC";
                $insert = mysqli_query($conn, $query);
                if ($insert->num_rows > 0) {
                    while ($row = $insert->fetch_assoc()) {
                        $filePath = 'public/assets/images/gallery/' . $row["file_name"];
                        $timedata = $row["uploaded_on"];
                        $fileMime = mime_content_type($filePath);
                ?>
                        <div class="col-md-3">
                            <a href="<?php echo $filePath; ?>" type="<?php echo $fileMime; ?>" class="gallery-popup" title="Open Imagination">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="<?php echo $filePath; ?>" type="<?php echo $fileMime; ?>" alt="img" class="gallery-thumb-img">
                                        <div class="project-item-overlay">
                                            <h4>fileName</h4>
                                            <p>
                                                <img src="<?php echo $filePath; ?>" type="<?php echo $fileMime; ?>" alt="user" class="thumb-sm rounded-circle" />
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="'ConnectData/pages-gallery-delete.php?=delete$file_name=<?php echo $row['file_name'] ?>">Remove</a>
                            <br>
                            <?php
                            echo "$timedata ";
                            ?>
                        </div>
                    <?php
                    }
                } else { ?>
                    <p>No files found...</p>
                <?php } ?>
            </div>

        </div><!-- end container -->
    </div> <!-- end wrapper -->

    <?php include 'layouts/footer.php'; ?>

    <?php include 'layouts/footerScript.php'; ?>

    <!-- Magnific Popup -->
    <script src="public/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>


    <!-- Dropzone js -->
    <script src="public/assets/plugins/dropzone/dist/dropzone.js"></script>

    <!-- App js -->
    <script src="public/assets/js/app.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        Dropzone.autoDiscover = false;
        $(function() {
            //Dropzone class
            var myDropzone = new Dropzone(".dropzone", {
                url: "ConnectData/pages-gallery-db.php",
                paramName: "file_name",
                maxFilesize: 2,
                parallelUploads: 15,
                acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
                autoProcessQueue: false
            });

            $('#startUpload').click(function() {
                myDropzone.processQueue();
            });
        });
    </script>



    <script type="text/javascript">
        $('.gallery-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    </script>



</body>

</html>