<?php
require_once('pages-gallery-connectdb.php');

//delelte image gallery
if (isset($_POST['delete_btn'])) {

	$id = $_POST['delete_id'];
	$query = "DELETE FROM db_files WHERE id='$id' ";
	$result = mysqli_query($conn, $query);

	if ($result) {
		
		header('Location: ../pages-gallery.php?delete=success');
	} else {
		echo 'Check Your delete';
	}
}


//delelte table product
if (isset($_POST['delete_btn_table'])) {

	$id = $_POST['delete_id_table'];
	$query = "DELETE FROM db_product WHERE db_product_id='$id' ";
	$result = mysqli_query($conn, $query);

	if ($result) {
		
		header('Location: ../pages-product1.php?delete=success');
	} else {
		echo 'Check Your delete';
	}
}

?>