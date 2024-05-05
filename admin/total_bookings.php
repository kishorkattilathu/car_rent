 <?php include ('layout/header.php'); ?>

 
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
<h2>Total Bookings</h2><br><br>
</div>

<div style="overflow-x:auto;">
 <div class="container">
  <table>

    <tr>
      
      <th>Sr No:</th>
      <th>Customer Email</th>
      <th>Owner Email</th>
      <th>Booking Status</th>
      <th>Booking Date</th>
      <th>Car Price</th>
      <th>Payment Status</th>
      <th>Car No. Plate</th>
      
    </tr>
   <?php
         include ('../connect.php');
         $i=1;
         $select="SELECT * FROM booking";
         $execute=mysqli_query($connect,$select);
         while ($fetch=mysqli_fetch_array($execute)) {
   ?> 
    <tr>
     <td><?=$i;?></td>
     <td><?=$fetch['customer_email']?></td>
     <td><?=$fetch['owner_email']?></td>
     <td><?=$fetch['booking_status']?></td>
     <td><?=$fetch['booking_date']?></td>
     <td><?=$fetch['price']?></td>
     <td><?=$fetch['payment_status']?></td>
     <td><?=$fetch['number_plate']?></td>
     
    </tr>
        <?php
           $i++; }
        ?>
           
        

    
  </table>
 </div>
</div>

</body>
</html>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<?php include('layout/footer.php'); ?>

