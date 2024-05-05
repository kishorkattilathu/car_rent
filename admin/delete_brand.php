<!-- <?php
$band_id=$_GET['id'];
include('../connect.php');
$delete="DELETE FROM brand WHERE brand_id='$band_id'";
  $execute=mysqli_query($connect,$delete);
if ($execute==1)

				{
					echo "<script>alert('Successfully deleted')</script>";
					echo "<script>window.location.href='manage_brands.php'</script>";
				}
				else
				{
					echo "<script>alert('Failed Try Again')</script>";
					echo "<script>window.location.href='manage_brands.php'</script>";

				}

?> -->
<?php
include('../connect.php');
$brandid=$_GET['id'];
$delete="DELETE FROM brand WHERE brand_id='$brandid'";
$execute=mysqli_query($connect,$delete);
if ($execute==1) 
    {
      echo "<script>alert('Successfully Deleted')</script>";
      echo "<script>window.location.href='manage_brands.php'</script>";
    }
    else
    {
      echo "<script>alert('Failed Try Again')</script>";
      echo "<script>window.location.href='manage_brands.php'</script>";


    }
?>
