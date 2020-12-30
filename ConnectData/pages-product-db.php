<?php
require_once('pages-gallery-connectdb.php');

if (isset($_POST['save_AddData'])) {

    $name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_descirption = $_POST['product_descirption'];
    $product_stock = $_POST['product_stock'];

    $query = "INSERT INTO db_product (db_product_name, db_product_price, db_product_description, db_product_num)
                                                        values('$name','$product_price',' $product_descirption',' $product_stock')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: ../pages-product1.php?product=success');
    } else {
        echo 'เชคข้อมูล';
    }
}

if(isset($_POST['updatebtn'])){

    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $product_price = $_POST['edit_price'];
    $product_descirption = $_POST['edit_descirption'];
    $product_stock = $_POST['edit_stock'];

    $query = "UPDATE db_product SET db_product_name='$name', db_product_price='$product_price', db_product_description='$product_descirption', db_product_num='$product_stock' WHERE db_product_id='$id' ";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header('Location: ../pages-product1.php?product=success');
    } else {
        echo 'Check Your Update';
    }
}





?>











































































<?php
// require_once('pages-gallery-connectdb.php');

//             $target_dir = "../public/assets/product/gallery/";
//             $target_file = $target_dir . $_FILES['file_name']['name'];
//             $msg = '';

//             srand((float)microtime() * 10000000);
//             $str = 'abcdefghijklmnopqrstuvwxyz0123456789'; //string ที่เป็นไปได้ที่จะใช้ในการ random ซึ่งสามารถเพิ่มลดได้ตามความต้องการ
//             $passw = str_shuffle($str);
//             $str_result = "";  //สตริงว่างสำหรับจะรับค่าจากการ random
//             $str_result .= substr($passw, 1, 20); //ต่อ string จาก substring ที่ได้จากการ random ตำแหน่ง ทีละ 1 ตัว 
//             //จนกว่าจะครบตรามความยาวที่ส่งมา

//             $file_name = explode(".", $_FILES['file_name']['name']);
//             $allowed_ext = array("jpg", "jpeg", "png", "gif");
//             $new_name = $str_result . '.' . $file_name[1];
//             $sourcePath = $_FILES['file_name']['tmp_name'];

//             $name                = $_POST['product_name'];
//             $product_price       = $_POST['product_price'];
//             $product_descirption = $_POST['product_descirption'];
//             $product_stock       = $_POST['product_stock'];
//             //echo  $dir = $_GET['dir'];
//             $target_file = '../public/assets/product/gallery/' . $new_name;

//             if (move_uploaded_file($_FILES['file_name']['tmp_name'], $target_file)) {
//                 //$date_n = date('Y-m-d');
//                 //$hour = date('H:i:s');
//                 $sql = "INSERT INTO db_product (db_product_name, db_product_price ,db_product_images, db_product_description, db_product_num) VALUES ('" . $name . "', '" .  $product_price . "', '" . $new_name . "', '" . $product_descirption . "','" . $product_stock . "',)";
//                 $insert = mysqli_query($conn, $sql);
//                 //mysql_query($insert);
//             } else {
//                 $msg = 'Error while uploading.';
//             }
// echo $msg;
// exit;
?>