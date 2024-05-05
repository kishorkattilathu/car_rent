<?php include ('layout/header.php'); ?>

   <!-- about breadcrumb -->
   <section class="w3l-about-breadcrumb position-relative text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container py-lg-5 py-3">
        <h2 class="title">Complaint</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="home.php">Home</a></li>
          <li class="active"><span class="fa fa-angle-double-right mx-2" aria-hidden="true"></span> Contact </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
  <section class="w3l-contact-11">
		<div class="form-41-mian py-5">
			<div class="container py-lg-4">
			  <div class="row align-form-map">
				
				  <?php
				  include ('../connect.php');
				  $select="SELECT * FROM user WHERE email='$mail'";
				  $execute1=mysqli_query($connect,$select);
				  $fetch=mysqli_fetch_array($execute1);

				  ?>

				 



				<div class="col-lg-12 form-inner-cont" style="border-style: solid;border-color:grey;border-width: 3px;"><br><br>
					<div align="center">
						<h3 class="hny-title mb-lg-5 mb-4">Write Your Complaints</h3>
					</div>
				  <form method="post" class="signin-form">
				  	<input type="hidden" name="userid" value="<?=$fetch['user_id']?>">
				  	<input type="hidden" name="useremail" value="<?=$fetch['email']?>">
					<div class="form-input">
					  <input type="text" name="name" id="name" placeholder="Name" />
					</div>
					<div class="row con-two">
					<div class="col-lg-6 form-input">
					  <input type="email" readonly="" id="email" value="<?=$fetch['email']?>" placeholder="Email"/>
					</div>
					<div class="col-lg-6 form-input">
						<input type="text" name="subject" placeholder="Subject" class="contact-input" />
					</div>
					</div>
					<div class="form-input">
					  <textarea placeholder="Message" name="msg" id="msg" required=""></textarea>
					</div>
					<div class="submit-button text-lg-right">
					   <button type="submit" name="button" class="btn btn-style">Submit</button>
				    </div>
				  </form><br>


 				



				</div>
			  </div>
			</div>
		  </div>
		  <div class="map">
			<iframe
			  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
			  frameborder="0" allowfullscreen=""></iframe>
		  </div>
	  </section>
	<!-- //contact-form -->
<?php include ('layout/footer.php'); ?>


<?php
include('../connect.php');
if (isset($_POST['button'])) 
{
	$userid=$_POST['userid'];
	$useremail=$_POST['useremail'];
	$name=$_POST['name'];
	$subject=$_POST['subject'];
	$msg=$_POST['msg'];

	// echo $userid;
	// echo $useremail;
	// echo $name;
	// echo $subject;
	// echo $msg;
	// echo $mail;
	$insert="INSERT INTO complaints(user_id,comp_name,comp_email,subject,message,reply) values('$userid','$name','$useremail','$subject','$msg','Nothing')";
	$execute=mysqli_query($connect,$insert);

	if ($execute) 
	{
		echo"<script>alert('Successfully Complaint Registered')</script>";
		echo"<script>window.location.href='complaints.php'</script>";
	}
	else
	{
		echo"<script>alert('Failed Please Try Again')</script>";
		echo"<script>window.location.href='complaints.php'</script>";

	}
}

?>




 