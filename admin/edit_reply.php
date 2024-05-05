<?php include ('layout/header.php'); ?>
<?php include('../connect.php');
 $id=$_GET['id'];

$select="SELECT * FROM complaints WHERE comp_id='$id'";
$execute=mysqli_query($connect,$select);
$fetch=mysqli_fetch_array($execute);

?>


<div class="registration">
								
												<div class="signin-form profile">
													<h2>Edit Message</h2><br><br>
													<div class="login-form">
														
														<form  method="post" enctype="multipart/form-data">
															<label>Customer Name</label>
															<input type="text" name="customername" readonly="" required="" value="<?php echo($fetch['comp_name'])?>" >
															<label>Subject</label>
															<input type="text" name="subject" readonly=""  required="" value="<?php echo($fetch['subject'])?>" >
															<label>Complaint</label>
															<input type="text" name="message" readonly="" required="" value="<?php echo($fetch['message'])?>" >
															<label>Replied</label>
															<input type="text" name="reply" value="<?php echo($fetch['reply'])?>" >
															
															
															<div class="tp">
																<input type="submit" value="UPDATE" name="button">
															</div>
														</form>
													</div>
													
												</div>
									</div>
											
						    </div>
						</div>



<?php include ('layout/footer.php'); ?>


<?php

 if (isset($_POST['button'])) 
 {
 	$customername=$_POST['customername'];
 	$subject=$_POST['subject'];
 	$message=$_POST['message'];
 	$reply=$_POST['reply'];

 	$update="UPDATE complaints SET reply='$reply' WHERE comp_id='$id'";
 	$execute1=mysqli_query($connect,$update);
 	if ($execute) 
 	{
 		echo"<script>alert('Updated successfully')</script>";
 		echo"<script>window.location.href='complaints_replied.php'</script>";
 	}
 	else
 	{
 		echo"<script>alert('Updated successfully')</script>";
 		echo"<script>window.location.href='complaints_replied.php'</script>";
 	}
 }

?>
