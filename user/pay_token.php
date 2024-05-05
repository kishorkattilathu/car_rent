 <?php
   include ('../connect.php');
   $id=$_GET['id'];      
?> 
<?php
                $select="SELECT * FROM booking inner join car_sale on booking.car_sale_id=car_sale.car_sale_id WHERE booking_id='$id'";
                $execute=mysqli_query($connect,$select);
                $fetch=mysqli_fetch_array($execute);
                $token_amount=$fetch['price']/5;


              ?>

             



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

   <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formPayment"></span>
                    <hr class="my-5">

                    <!-- form card cc payment -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <h3 class="text-center">Credit Card Payment</h3>
                            <hr>
                            <!-- <div class="alert alert-info p-2 pb-3">
                                <a class="close font-weight-normal initialism" data-dismiss="alert" href="#"><samp>×</samp></a> 
                                CVC code is required.
                            </div> -->
                            <form class="form" role="form" method="post" autocomplete="off">

                                 <input type="hidden" name="customer_id" value="<?=$fetch['customer_id']?>">
                <input type="hidden" name="owner_id" value="<?=$fetch['owner_id']?>">

                <input type="hidden" name="customer_email" value="<?=$fetch['customer_email']?>">
                <input type="hidden" name="owner_email" value="<?=$fetch['owner_email']?>">
                <br>
                <input type="hidden" name="booking_id" value="<?=$fetch['booking_id']?>">
                <br>

                <input type="hidden" name="price" value="<?=$fetch['price']?>">
                
                                <div class="form-group">
                                    <label for="cc_name">Card Holder's Name</label>
                                    <input type="text" class="form-control" id="cc_name" name="cardname" pattern="\w+ \w+.*" title="First and last name" required="required" placeholder="First-Name Last-Name">
                                </div>
                                <div class="form-group">
                                    <label>Card Number</label>
                                    <input type="text" class="form-control" autocomplete="off" name="cardnumber" maxlength="20" pattern="\d{16}" title="Credit card number" required="" placeholder="16 Digit Number">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-12">Card Exp. Date</label>
                                    <div class="col-md-4">
                                        <input type="text" name="expiry" value="" placeholder="MM">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="expyear" value="" placeholder="YY">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" name="cvc" required="" placeholder="CVC">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-12">Amount</label>
                                </div>
                                <div class="form-inline">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">₹</span></div>
                                        <input type="text" class="form-control text-right" name="token" readonly="" id="exampleInputAmount" placeholder="" value="<?=$token_amount?>">
                                        
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <button type="reset" class="btn btn-default btn-lg btn-block">Cancel</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" name="button" class="btn btn-success btn-lg btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card cc payment -->
                
               


















<?php
if (isset($_POST['button'])) 
    {

        $customer_id=$_POST['customer_id'];


        $owner_id=$_POST['owner_id'];
        $customer_email=$_POST['customer_email'];
        $owner_email=$_POST['owner_email'];
        $booking_id=$_POST['booking_id'];
        $price=$_POST['price'];

        $cardname=$_POST['cardname'];
        $cardnum=$_POST['cardnumber'];
        $cvc=$_POST['cvc'];
        $expiry=$_POST['expiry'];
        $year=$_POST['expyear'];
        $token=$_POST['token'];
        
        $insert="INSERT INTO token(customer_id,owner_id,customer_email,owner_email,booking_id,price,card_name,card_no,cvc,expiry_month,expiry_year,token_amount) values('$customer_id','$owner_id','$customer_email','$owner_email','$booking_id','$price','$cardname','$cardnum','$cvc','$expiry','$year','$token') ";
        $execute=mysqli_query($connect,$insert);
        if ($execute==1) 
        {
            $update="UPDATE booking set payment_status='Token_Paid' WHERE booking_id='$id'";
            $execute1=mysqli_query($connect,$update);
            if ($execute1==1) 
            {
            echo "<script>alert('Paid Succesfully')</script>";
            echo "<script>window.location.href='mybooking.php'</script>";
            }
            else
              {
                 echo "<script>alert('Failed please try again')</script>";
                 echo "<script>window.location.href='pay_token.php'</script>";
              }
        }
        else
        {
            echo "<script>alert('Failed code error please try again')</script>";
            echo "<script>window.location.href='pay_token.php'</script>";

        }

    }

?>