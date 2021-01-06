<?php
include "connect.php";
$id = $_GET['id'];
$email = $_GET['email'];
$name = $_GET['name'];
$date = $_GET['date'];
$time = $_GET['time'];
$sql = mysqli_query($connection,"DELETE FROM appointment WHERE id = '$id' AND email = '$email' AND date='$date' AND time='$time'");
 
 //echo  $id . $name . $email .$date . $time;?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <link rel='shortcut icon' href='logo.jpg' type='image/x-icon' />
        <meta name="msvalidate.01" content="F1178E06F62827B2DD8EF2FE31CC0EBF" />
        <title>Art of Success | Appointment Booked</title>
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

            <h2 class="title-style-1">Appointment Booking Cancel for Reiki Healing <span class="title-under"></span></h2>

            <div class="row">

                
                <div class="col-md-9 col-sm-6">

                    

                        
<center><div class="col-md-12 col-sm-6">
                            <div class ="div1"><br>
                            <h3>Appointment Booking Cancel for Reiki Healing<br>
Dear <b><?php echo $name ?></b> Your Reiki Healing booking cancel and deleted.<br>
                        If you want appointment again please visit <a href="appointment.php">Appointment page</a></h3><br><br>
                            </div>
                        </div>
                        </center>

                    
                    
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