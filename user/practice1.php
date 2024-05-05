<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
            <?php
   include ('../connect.php');
   $id=$_GET['id'];      
?> <?php
                $select="SELECT * FROM booking inner join car_sale on booking.car_sale_id=car_sale.car_sale_id WHERE booking_id='$id'";
                $execute=mysqli_query($connect,$select);
                $fetch=mysqli_fetch_array($execute);
                $token_amount=$fetch['price']/5;


              ?>

              <input type="hidden" name="customer_id" value="<?=$fetch['customer_id']?>">
                <input type="hidden" name="owner_id" value="<?=$fetch['owner_id']?>">

                <input type="hidden" name="customer_email" value="<?=$fetch['customer_email']?>">
                <input type="hidden" name="owner_email" value="<?=$fetch['owner_email']?>">
                <br>
                <input type="hidden" name="booking_id" value="<?=$fetch['booking_id']?>">
                <br>

                <input type="hidden" name="price" value="<?=$fetch['price']?>">

            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' name="cardname" size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' name="cardnumber" class='form-control card-number' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' name="cvc" class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' name="expiry" placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' name="expyear" placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'>$300</span>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' name="button" type='submit'>Pay »</button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>



<style type="text/css">
  .submit-button {
  margin-top: 10px;
}

</style>

<script>
$(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;

    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});

$(function() {
  var $form = $("#payment-form");

  $form.on('submit', function(e) {
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
    if (response.error) {
      $('.error')
        .removeClass('hide')
        .find('.alert')
        .text(response.error.message);
    } else {
      // token contains id, last4, and card type
      var token = response['id'];
      // insert the token into the form so it gets submitted to the server
      $form.find('input[type=text]').empty();
      $form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
      $form.get(0).submit();
    }
  }
})
</script>


<?php
if (isset($_POST['button'])) 
    {

        $customer_id=$_POST['customer_id'];
       echo $customer_id;
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





























<!-- 
<br><br><br>
<br><br><br>
<br><br><br>
<?php
   include ('../connect.php');
   $id=$_GET['id'];      
?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          <form method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
              <?php
                $select="SELECT * FROM booking inner join car_sale on booking.car_sale_id=car_sale.car_sale_id WHERE booking_id='$id'";
                $execute=mysqli_query($connect,$select);
                $fetch=mysqli_fetch_array($execute);
                $token_amount=$fetch['price']/5;


              ?>
                <input type="hidden" name="customer_id" value="<?=$fetch['customer_id']?>">
                <input type="hidden" name="owner_id" value="<?=$fetch['owner_id']?>">

                <input type="hidden" name="customer_email" value="<?=$fetch['customer_email']?>">
                <input type="hidden" name="owner_email" value="<?=$fetch['owner_email']?>">
                <br>
                <input type="hidden" name="booking_id" value="<?=$fetch['booking_id']?>">
                <br>

                <input type="hidden" name="price" value="<?=$fetch['price']?>">


            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input  name="cardname"  type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input  name="cardnumber"  type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' name="cvc" class='form-control card-cvc' placeholder='ex. 311'  type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input  name="expiry" placeholder='MM'  type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input  name="expyear" placeholder='YYYY'  type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Token Amount:
                  <input class='amount' name="token" readonly="" value="<?php echo $token_amount?>">
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' name="button" type='submit'>Pay »</button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>

<style type="text/css">
  .submit-button {
  margin-top: 10px;
}

</style>


<script>
$(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;

    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});

$(function() {
  var $form = $("#payment-form");

  $form.on('submit', function(e) {
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
    if (response.error) {
      $('.error')
        .removeClass('hide')
        .find('.alert')
        .text(response.error.message);
    } else {
      // token contains id, last4, and card type
      var token = response['id'];
      // insert the token into the form so it gets submitted to the server
      $form.find('input[type=text]').empty();
      $form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
      $form.get(0).submit();
    }
  }
})

</script>


<?php
if (isset($_POST['button'])) 
    {

        $customer_id=$_POST['customer_id'];
       echo $customer_id;
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

?>  -->