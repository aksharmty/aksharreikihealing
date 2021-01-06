<?php
session_start();
session_unset();
session_destroy();
?>
<?php include"connect.php";
error_reporting(E_ALL); // DEBUGGING ONLY
ini_set('display_errors', 'true'); // DEBUGGING ONLY
?>
<!DOCTYPE html>
<html class="no-js">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>Logout</title>
        <meta name="description" content="logout">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="//kanyadaan.co.in/assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="//kanyadaan.co.in/assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="//kanyadaan.co.in/assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="//kanyadaan.co.in/assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="//kanyadaan.co.in/assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body>
<?php include"header.php"?>
    
     <div class="section-home our-causes">

        <div class="container">
        <div class="col-md-9">

            <div class="row">
<center><?php include"topad.php"?></center><br>
            <h2 class="title-style-1">Successfully,Logged out <span class="title-under"></span></h2>
            <div class="col-md-12 col-sm-6">
            <h4> <center>You are Successfully,Logged out<br><br><a href='login.php'> Login Again </a> or <a href=index.php>Go To Home Page</a><br></center>
            <br></4>
    </div>
                <div class="col-md-12">
<?php include"bottomad.php"?><br>
</div>


</div></div>
                <div class="col-md-3">

<?php include "sidebar.php" ?>                    
                </div>

</div></div>                


    <footer class="main-footer">
<?php include"footer.php"?>

    </body>
</html>