<?php

if (isset($_POST['submit'])){
   $First_Name=$_POST['first_name'];
   $Last_Name=$_POST['last_name'];
   $Client_Mail=$_POST['email'];
   $Client_Subject=$_POST['subject'];
   $Client_Message=$_POST['message'];

   $To='awais.2120@gmail.com';
   $Subject='Form Submission';
   $Message="First Name: ".$First_Name."\n"."Last Name: ".$Last_Name."\n"."Email: ".$Client_Mail."\n"."Subject: ".$Client_Subject."\n"."Message: ".$Client_Message;
   $headers="From: ".$email;
   
   if(mail($To,$Subject,$Message,$headers)){
       echo "<h1>Sent Successfully! Thank You"." ".$First_Name.", We Will Contact You Shortly!</h1>";
   }else{
       echo "Something Went Wrong!";
   }
}

?>