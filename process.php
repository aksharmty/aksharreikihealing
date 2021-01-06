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
            $pdate_error = "Please Choose Appointment Date After ".$pdate;
  } else {
            //echo "active";
            
   	    if($sql123["total"] > 1){
  	  $date_error = "Sorry In this schedule Booked ". $date ." And ".$time . $sql123["total"]; 	
  	}else{
  	       $query = "INSERT INTO appointment (name, email, phone,country,plan,date,time) 
      	    	  VALUES ('$name','$email', '$phone', '$country','$plan','$date','$time')";
           $results = mysqli_query($connection, $query);
           header("Location: success.php?date=$date&time=$time");
           exit();

////////////////////////////           
           
echo $email; 
         $to="sakhihosting@gmail.com";
                
               // Your subject
                 $subject=$plan;
               
                // From
               // $header="from: noreply@adquash.com < noreply@adquash.com >";
             //    $headers .= "Reply-To: $sql6 \r\n";
               $headers = "From: Akshar Reiki Healing <noreply@adquash.com>\r\n";
$headers .= "Reply-To: aksharreikihealing@gmail.com\r\n";
$headers .= "Return-Path: Akshar Reiki Healing <noreply@adquash.com>\r\n";
//$headers .= "CC: info@youradmin.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                
                // Your message
                $message=
                "<head>
   <h2 style='font-family:verdana;text-align:center;background-color:#ff0000;color:white;'>
   <p>Appointment booked on akshar reiki healing
    <br>
                <br>akshar reiki healing<br>
                Website : https://aksharreikihealing.tk<br>
                whatsapp : +91 9213816442<br></b></center>
    
  </h2><br>
   </head>";
                
                // send email
                $sentmail = mail($to,$subject,$message,$headers);
   

/////////////////////////////////
  	}
  }
  }
  
 // echo $pdate;
 // echo $date;
  ?> 