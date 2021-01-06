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
  $sql123 = mysqli_fetch_assoc(mysqli_query($connection,"SELECT COUNT(id) AS total FROM appointment where date='$date' AND time='$time'"));
 
  if ($pdate >= $date) {
            $pdate_error = "Please Choose Class Date After ".$pdate;
  } else {
            //echo "active";
            
   	    if($sql123["total"] > 20){
  	  $date_error = "Sorry In this schedule All Seal Booked ". $date ." And ".$time . $sql123["total"]; 	
  	}else{
  	       $query = "INSERT INTO appointment (name, email, phone,country,plan,date,time) 
      	    	  VALUES ('$name','$email', '$phone', '$country','$plan','$date','$time')";
           $results = mysqli_query($connection, $query);
           header("Location: successclass.php?date=$date&time=$time");
           exit();
  	}
  }
  }
  
 // echo $pdate;
 // echo $date;
  ?> 