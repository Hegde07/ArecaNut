
               <?php
			   $amount=$_GET['amount'];
			   //echo $amount;

			   ?> 
               
              <h3 align="center" class="tittle text-center">Add Payment Details</h3>
<form action="../markedia/pmt_insert.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_8yZuL0JHVhOdQV"
    data-amount="<?php echo $amount."00"?>"
    data-buttontext="Pay with Razorpay"
    data-name="Areca"
    data-description="Arecanut Bill"
    data-image=""
    data-prefill.name="Your name"
    data-prefill.email="your email id"
    data-theme.color="#F37254"></script>
   
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
        