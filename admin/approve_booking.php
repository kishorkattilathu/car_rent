<?php include ('layout/header.php'); ?>
<?php
include('../connect.php');
$id=$_GET['id'];
$update="UPDATE booking set booking_status='Approved' WHERE booking_id='$id'";
$execute=mysqli_query($connect,$update);
				if($execute==1)
				{
					echo "<script>alert('Approved')</script>";
					echo "<script>window.location.href='verify_bookings.php'</script>";
				}
				else
				{
					echo "<script>alert('Try Again')</script>";
					echo "<script>window.location.href='verify_bookings.php'</script>";
				}

?>

<?php include ('layout/footer.php'); ?>