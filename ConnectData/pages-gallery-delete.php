<?php 
require_once('pages-gallery-connectdb.php');

	$del_img=$_GET['file_name']['name'];
	$query = "DELETE FROM files WHERE file_name='$del_img'";
	$result = mysqli_query($conn, $query);

	if($result){
		?>
		<script>
			alert('the image has beem deleted');
			window.location.href = '../pages-gallery.php?delete';
		</script>

		<?php 
		unlink('../public/assets/images/gallery/$del_img');
	}else{
		?>
		<script>
			alert('the image not yet delete');
			window.location.href = '../pages-gallery.php';
		</script>
		<?php
	}
?>