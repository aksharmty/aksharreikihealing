<?php
include "connect.php";
$date = $_GET['date'];
$time = $_GET['time'];
$sql = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM appointment WHERE date='$date' AND time='$time' ORDER BY ID DESC"));
$id = $sql['id'];
$name = $sql['name'];
$email = $sql['email'];
$plan2 = $sql['plan'];
if($plan2 == 5500){ $plan1="THOUGHT PROCESS CLASS";}
if($plan2 == 6000){ $plan1="AKSHAR REIKI HEALING CLASS";}
if($plan2 == 5000){ $plan1="SPOT TRADING CLASS";}
$time1 = $sql['time'];
//if($time1 == 10){ $time="10 AM - 1 PM";}
//if($time1 == 2){ $time="2 PM - 5 PM";}
//if($time == 6){ $time="6 PM - 9 PM";}
 ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <link rel='shortcut icon' href='logo.jpg' type='image/x-icon' />
        <meta name="msvalidate.01" content="F1178E06F62827B2DD8EF2FE31CC0EBF" />
        <title>Akshar Reiki Healing Class Appointment</title>
        <meta name="description" content="learn thought process for your bright future">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
<style>
.div1{
  background-color: blue;
  color:white;
  margin-top:30px
  margin-bottom:30px;
}
</style>
    </head>

    <body>
<?php include"header.php"?>
       <div class="section-home our-causes">

        <div class="container">

            <h2 class="title-style-1">Appointment Booked for Thought Process Class <span class="title-under"></span></h2>

            <div class="row">

                
                <div class="col-md-9 col-sm-6">

                    <div class="cause">

                        <div class="cause-details">
                           <center>
                        <p><h3>Appointment booked for Akshar Reiki Healing Class <br>
                        For confirmation booking please send class fee &#8377; <?php echo $sql['plan']; ?> within 24 hours.<br>
                        After 24 hours automatic delete all unconfirm booking.</h3></p></center>
                         </div>
<center><div class="col-md-6 col-sm-6">
                            <div class ="div1"><br>
                            Name : <?php echo $sql['name']; ?><br>
                            Email : <?php echo $sql['email']; ?><br>
                            Phone : <?php echo $sql['phone']; ?><br>
                            Country : <?php echo $sql['country']; ?><br>
                            Class Language : Hindi<br>
                            Class Type : <?php echo $plan1; ?><br>
                            Class Date : <?php echo $sql['date']; ?><br>
                            Class Time : <?php echo $time; ?> IST<br>
                            Class Fee : &#8377; <?php echo $sql['plan']; ?><br><br>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <?php $country = $sql['country'];
                            //if($country != "India")
                            if($country = $country){echo "<b>NOTE : All offline classes will be provided in DELHI - INDIA only</b><br>
                            <form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
<input type='hidden' name='cmd' value='_xclick'>
<input type='hidden' name='business' value='sakhihosting@gmail.com'>
<input type='hidden' name='lc' value='US'>
<input type='hidden' name='item_name' value='$plan1'>
<input type='hidden' name='button_subtype' value='services'>
<input type='hidden' name='no_note' value='0'>
<input type='hidden' name='currency_code' value='INR'>
<input type='hidden' name='tax_rate' value='6.000'>
<input type='hidden' name='cancel_return' value='https://aksharreikihealing.tk/cancel.php?id=$id&name=$name&email=$email&date=$date&time=$time1'>
<input type='hidden' name='bn' value='PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest'>
<table>
<tr><td><input type='hidden' name='on0' value='Select Class Option'>Payable Amount</td></tr><tr><td><select name='os0'>
	<option value='$plan2'>$plan1 &#8377; $plan2 INR+tax</option>
</select> </td></tr>
</table>
<input type='hidden' name='option_select0' value='$plan2'>
<input type='hidden' name='option_amount0' value='$plan2'>
<input type='hidden' name='option_index' value='0'>
<input type='image' src='https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
<img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'>
</form>
";}else{
                            echo "<p>For Payment Scan PAYTM QR Code.<br><br>
                        <img src='paytm.jpg' width='250px'></p>
                        <p>Share payment screenshot with your details on Whatsapp (+91 9213816442)  </p>";
                            }?>
                        </div>
                        </center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        
                    </div> <!-- /.cause -->
                    
                </div>


                
                <div class="col-md-3 col-sm-6">

                   <?php include "sidebar.php" ?>

                </div>

            </div>

        </div>
        
    </div> <!-- /.our-causes -->


    


    <footer class="main-footer">
<?php include"footer.php"?>

    </body>
</html>