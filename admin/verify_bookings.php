<?php include('layout/header.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<div class="text-center">
<h2>Verify Bookings</h2>
<br>
<br>
<br>
<br>
</div>
<!-- <p>If you have a table that is too wide, you can add a container element with overflow-x:auto around the table, and it will display a horizontal scroll bar when needed.</p>
<p>Resize the browser window to see the effect. Try to remove the div element and see what happens to the table.</p>
 -->




<div style="overflow-x:auto;">
  <div class="container">
   

  <table>
    <tr>
      <th>Sr No.</th>
      <th>Customer Name</th>
      <th>Customer Email</th>
      <th>Owner Name</th>
      <th>Owner Email</th>
      <th>Booking Date</th>
      <th>Price</th>
      <th>Booking Status</th>
      <th>Approve</th>
      <th>Reject</th>
      
    </tr>
     <?php
include ('../connect.php');
$i=1;
$select="SELECT * FROM booking inner join user on booking.customer_id=user.user_id where booking_status='Pending'";
$execute=mysqli_query($connect,$select);
while ($fetch=mysqli_fetch_array($execute)) {

        $select1="SELECT * FROM booking inner join user on booking.owner_id=user.user_id where booking_status='Pending'";
    $execute1=mysqli_query($connect,$select1);
    $fetch1=mysqli_fetch_array($execute1);
?>
    <tr>
      <td><?= $i ; ?></td>
      <td><?php echo $fetch['username']?></td>
      <td><?php echo $fetch['customer_email']?></td>
      <td><?php echo $fetch1['username']?></td>
      <td><?php echo $fetch['owner_email']?></td>
      <td><?php echo $fetch['booking_date']?></td>
      <td><?php echo $fetch['price']?></td>
      <td><?php echo $fetch['booking_status']?></td>
      <td><a href="approve_booking.php?id=<?=$fetch['booking_id']?>"><img src="images/approve.png" style="height:80px;width:70px "></a></td>
      <td><a href="reject_bookings.php?id=<?=$fetch['booking_id']?>"><img src="images/rejected.jpg" style="height:50px;width:50px"></a></td>
    </tr>
    <?php 
        $i++;
      
      }
    ?>
  </table>

  </div>
</div>

</body>
</html>

<br>
<br>
<br>
<br>
<br>

<?php include('layout/footer.php'); ?>

