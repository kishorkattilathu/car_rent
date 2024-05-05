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
<h2>Manage Brands</h2><br><br>
</div>
<!-- <p>If you have a table that is too wide, you can add a container element with overflow-x:auto around the table, and it will display a horizontal scroll bar when needed.</p>
<p>Resize the browser window to see the effect. Try to remove the div element and see what happens to the table.</p>
 -->
<div style="overflow-x:auto;">
  <div class="container">
  <table>

    <tr>
      <th>Sr No.</th>
      <th>Brand Name</th>
      <th>Brand Image</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <?php
    include('../connect.php');
    $select="SELECT * FROM brand";
    $execute=mysqli_query($connect,$select);
    $i=1;
    while ($fetch=mysqli_fetch_array($execute)) {
      
    
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $fetch['brand_name']; ?></td>
      <td><img src="Brands/<?= $fetch['brand_image']?>"></td>
      <td>
        <a href="edit_brands.php?id=<?php echo  $fetch['brand_id']?>">
        <img src="images/edit.png" style="height: 50px;width:50px"></td>
        </a>
      <td>
        
        <a href="delete_brand.php?id=<?php echo $fetch['brand_id']?>">
        <img src="images/delete.png" style="height: 50px;width: 50px">
      </a>
    </td>
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

