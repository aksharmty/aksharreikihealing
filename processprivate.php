<?php
include "connect.php";
$username = "";
  $email = "";
  if (isset($_POST['submit'])) {
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$phone = $_POST['phone'];
  	$country = $_POST['country'];
 	$plan = $_POST['plan'];
 	$date = $_POST['date'];
 	$time = $_POST['time'];
define('TIMEZONE', 'Asia/kolkata');
date_default_timezone_set(TIMEZONE);
  $pdate = DATE("Y-m-d");
  if ($pdate > $date) {
            $pdate_error = "Please choose right date " . $pdate ." or After ".$pdate;
  } else {
            //echo "active";
                 
          	$sql_e = "SELECT * FROM user WHERE date='$date' AND time='$time'";
   	$res_e = mysqli_query($connection, $sql_e);
   	if(mysqli_num_rows($res_e) > 0){
  	  $date_error = "Sorry... Appointment already taken"; 	
  	}else{
  	       $query = "INSERT INTO user (name, email, phone,country,plan,date,time) 
      	    	  VALUES ('$name','$email', '$phone', '$country','$plan','$date','$time')";
           $results = mysqli_query($connection, $query);
           header("Location: success.php?date=$date&time=$time");
           exit();
  	}
  }
  }
   // echo $pdate;
 // echo $date;
  ?> 