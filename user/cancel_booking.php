<?php
include ('../connect.php');
$id=$_GET['id'];

$delete="DELETE FROM booking WHERE booking_id='$id'";
$execute=mysqli_query($connect,$delete);
if ($execute) 
{
	echo "<script>alert('Deleted Successfully')</script>";
	echo "<script>window.location.href='mybooking.php'</script>";
}
else
{
	echo "<script>alert('Failed Please Try Again')</script>";
	echo "<script>window.location.href='mybooking.php'</script>";

}

?>