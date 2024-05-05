<?php include ('layout/header.php'); ?>

<?php
	include ('../connect.php');
 	$id=$_GET['id'];
 	$update="UPDATE booking set booking_status='Rejected' where booking_id='$id'";
 	$execute=mysqli_query($connect,$update);
 	if($execute==1) 
 	{
 		echo "<script>alert('Rejected done')</script>";
 		echo "<script>window.location.href='verify_bookings.php'</script>";
 	}
 	else
 	{
 		echo "<script>alert(Failed something went wrong please try again..)</script>";
 		echo "<script>window.location.href='verify_bookings.php'</script>";
 	}
?>

<?php include ('layout/footer.php'); ?>