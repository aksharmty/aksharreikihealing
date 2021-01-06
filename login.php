<?php include"connect.php"?>
<?php

session_start();
if(isset($_SESSION["dealer"]))  
 {  
      header("location:index.php");  
 }  
if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connection, $_POST["username"]);  
           $password = mysqli_real_escape_string($connection, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM dealer WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connection, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['dealer'] = $username;  
                //header("location:loginbonus.php");
                header("location:index.php");
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';   
           }  
      }  
 }  
 ?>  

<!DOCTYPE html>
<html class="no-js">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>Login</title>
        <meta name="description" content="login your account">
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


    </head>

    <body>

    

		<div class="container zoomIn animated">
			
			<center><p style="background-color:#ec3434;"><img src="//kanyadaan.co.in/logo.png"></p></center>
			
		</div>

	

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-3 col-sm-3"></div>
				    <div class="col-md-6 col-sm-6 col-form">

					<h2 class="title-style-2">Dealer Login Form <span class="title-under"></span></h2>

					<form action="login.php" method="post" >

						<div class="row">
	                         <div class="form-group col-md-12">
	                            <input style="height:50px; width:100%; type="text" name="username" id="username" required placeholder="Enter your Username" />
	                            <br>
	                        </div>
	                        
							
						</div>


                        <div class="row">

							<div class="form-group col-md-12">
							
							    <input style="height:50px; width:100%; type="password" name="password" id="password" required placeholder="Enter your Password"/>
	                        </div>
	                         
						</div>

                      <div class="row">

					   
                         <div class="form-group col-md-12">
                            <center><input value="login" class="btn btn-primary" name="login" type="submit"></center>
                            
                        </div>
                        </div>
<div class="col-md-3 col-sm-3"></div>
                        <div class="clearfix"></div>

					</form>

				</div>

				
			</div> <!-- /.row -->


		</div>
		


	</div>
	 <br>
                 <h2 class="title-style-1"><a href="resetpass.php"> Forgot Your Password</a>
                        <br><br></h2>
                       
     <footer class="main-footer">

        <div class="footer-top">
            
        </div>



    <footer class="main-footer">


    </body>
</html>