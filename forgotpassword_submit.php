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
			
			<center><p style="background-color:#ec3434;"><img src="../logo.png"></p></center>
			
		</div>

	

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-3 col-sm-3"></div>
				    <div class="col-md-6 col-sm-6 col-form"><br>
				    <center>
                <?php echo "$email" ; ?>
<br>
               
               <?php
    if(isset($_POST['register']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $sql = "UPDATE dealer SET password='".md5($password)." ' WHERE email='$email'";

       if ($connection->query($sql) === TRUE) {
      
       $sql1 = "SELECT * FROM dealer where  email ='$email'";
       $sql2 = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM dealer WHERE email ='$email' "));
       //$sql3 = $sql2['username'];
       $sql4 = $sql2['password'];
       $sql5 = $sql2['name'];
       

$result1 = $connection->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
while($row = $result1->fetch_assoc()) {
         
        echo "<h2 class=title-style-1> Name  : ".$row["name"]. "</h2><br>";
        echo " Your New Password sent on your email " , $row["email"]. "<br>";
        echo " Check your inbox or spam folder for your new password and login with your new password";
        
         
         //
         $to=$email;
                
               // Your subject
                 $subject="New Password for Kanyadaan Dealer account";
               
                // From
                $header="from: noreply@kanyadaan.co.in/ < noreply@kanyadaan.co.in >";
                //$headers .= "Reply-To: $sql6 \r\n";
                
                // Your message
                $message=
                "Dear  $sql5,\n\n
                Your Username is : $sql3 \n
                Your New Password is : $password \n
                Best Regards,\n
                Kanyadaan Dealer Support Team \n
                Website: https://dealer.kanyadaan.co.in";
                
                // send email
                $sentmail = mail($to,$subject,$message,$header);
    }
} else {
    echo "Account not found <br>
    If you are sure you have a dealer account with us <a href='resetpass.php' class='btn btn-primary'>TRY AGAIN</a> OR <a href='contact.php' class='btn btn-primary'>CONTACT ADMIN</a><br>
   <br><br> ";
}

        } else {
    echo "Error: " . $sql1 . "<br>" . $connection->error;
}
  }  
?>

</center><br>

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