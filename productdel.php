<?php
include 'db.php';
$insertproducts_id =$_REQUEST['id'];
$result = mysqli_query($conn,"DELETE from  insertproducts  WHERE id = '$insertproducts_id'");
			
    echo '<script>alert("Data deleted successfully")</script>';
		 echo "<script>windows: location='mysellings.php'</script>";		