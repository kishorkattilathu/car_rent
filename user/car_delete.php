<?php 
$id=$_GET['id'];

include('../connect.php');
$delete="DELETE FROM car_sale WHERE car_sale_id='$id'";
$execute=mysqli_query($connect,$delete);
if($execute)
{
    echo "<script>alert('Deleted Successfully')</script>";
    echo "<script>window.location.href='my_car_details.php'</script>";
}
else
{
    echo "<script>alert('Failed Please Try Again')</script>";
    echo "<script>window.location.href='my_car_details.php'</script>";
}
?>