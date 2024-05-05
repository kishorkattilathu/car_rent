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
<h2>Total Users</h2><br><br>
</div>

<div style="overflow-x:auto;">
  <div class="container">

   


  <table>

    <tr>
      
      <th>Sr No:</th>
      <th>Customer Name</th>
      <th>Customer Email</th>
      <th>Phone No.</th>
      <th>Address</th>
      
    </tr>
    <?php
    include ('../connect.php');
    $i=1;
    $select="SELECT * FROM user";
    $execute=mysqli_query($connect,$select);
    while ($fetch=mysqli_fetch_array($execute)) {
      
    ?>
    <tr>
     <td><?=$i;?></td>
     <td><?=$fetch['username']?></td>
     <td><?=$fetch['email']?></td>
     <td><?=$fetch['phone']?></td>
     <td><?=$fetch['address']?></td>
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

<br><br><br>
<?php include('layout/footer.php'); ?>

