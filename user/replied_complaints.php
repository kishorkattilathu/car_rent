<?php include ('layout/header.php'); ?>


</style>
 <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">Complaint Response</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="home.php">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Response </li>
        </ul>
      </div>
    </div>
  </section>

<br><br><br><br>
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

<h2 class="text center" align="center">Your Complaints And Reply</h2><br><br>


<div style="overflow-x:auto;">



  <table>
    <tr>
      <th>Sr No.</th>
      <th>Your Name</th>
      <th>Subject</th>
      <th>Your Complaints</th>
      <th>Replied</th>
    </tr>

    
	<?php
include ('../connect.php');
$i=1;
$select="SELECT * FROM complaints WHERE comp_email='$mail'";
$execute=mysqli_query($connect,$select);
while ($fetch=mysqli_fetch_array($execute)) 
{
	?>
    <tr>
      <td><?=$i;?></td>
      <td><?=$fetch['comp_name'];?></td>
      <td><?=$fetch['subject'];?></td>
      <td><?=$fetch['message'];?></td>
      <td><?=$fetch['reply'];?></td>
    </tr>
   
   <?php
	$i++;
}

?>
  </table>

	
</div>

<br><br><br><br>
</body>
</html>

<?php include ('layout/footer.php'); ?>
