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
<h2>Complaints Replied</h2><br><br>
</div>

<div style="overflow-x:auto;">
  <div class="container">
  <table>

    <tr>
      
      <th>Sr No:</th>
      <th>Customer Name</th>
      <th>Customer Email</th>
      <th>Subject</th>
      <th>Complaint</th>
      <th>Replied</th>
      <th>Action</th>
    </tr>
    <?php 
    $i=1;
	include ('../connect.php');

	$select="SELECT * FROM complaints";
	$execute=mysqli_query($connect,$select);
	while ($fetch=mysqli_fetch_array($execute)) 

	{
	
	

?>
    <tr>
     
      
      
      
      
      
      
     <td><?=$i?></td>
     <td><?=$fetch['comp_name']?></td>
     <td><?=$fetch['comp_email']?></td>
     <td><?=$fetch['subject']?></td>
     <td><?=$fetch['message']?></td>
     <td><?=$fetch['reply']?></td>
     <!-- <td><a href="reply-complaints.php?id=<?=$fetch['comp_id']?>">Reply</a></td> -->
      <td><a href="edit_reply.php?id=<?=$fetch['comp_id']?>">Edit</a></td> 
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

