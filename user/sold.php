 <?php
include ('../connect.php');
$id=$_GET['id'];
$sale_id=$_GET['sale_id'];

	$update="UPDATE booking SET payment_status='Sold' WHERE booking_id='$id'";
	$execute=mysqli_query($connect,$update);
	if ($execute) 
	{
		$update1="UPDATE car_sale SET car_sold='SOLD' WHERE car_sale_id='$sale_id'";
		$execute1=mysqli_query($connect,$update1);
			if ($execute1) 
		{
			echo "<script>'Sold Successfully.'</script>";	
			echo "<script>window.location.href='car_status.php'</script>";	
		}
		else
		{
			echo "<script>'failed please try again.'</script>";	
			echo "<script>window.location.href='car_status.php'</script>";	
		}
	}
	else
	{
		echo "<script>'failed try again.'</script>";	
		echo "<script>window.location.href='car_status.php'</script>";	

	}
?> 