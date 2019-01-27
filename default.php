
<!DOCTYPE html>
<html>
<body>

<?php

if(isset($_POST['submit']))
{
   sendmail();
} 

function sendmail()
{
   $to = "ramya.akula01@gmail.com";
   $subject = "This is subject";
   $message = "1." . $_POST['element_1'] . "\r\n" . 
   			  "2." . $_POST['element_2'] . "\r\n" . 
   			  "3." . $_POST['element_3'] . "\r\n" . 
   			  "4." . $_POST['element_4'] . "\r\n" . 
   			  "5." . $_POST['element_5'] . "\r\n" . 
   			  "6." . $_POST['element_6'] . "\r\n" . 
   			  "7." . $_POST['element_7'] . "\r\n" . 
   			  "8." . $_POST['element_8'] . "\r\n" . 
   			  "9." . $_POST['element_9'] . "\r\n" . 
   			  "10." . $_POST['element_10'] . "\r\n" . 
   			  "11." . $_POST['element_11'] . "\r\n" . 
   			  "12." . $_POST['element_12'] . "\r\n" . 
   			  "13." . $_POST['element_13'] . "\r\n" . 
   			  "14." . $_POST['element_14'] . "\r\n" . 
   			  "15." . $_POST['element_15'] . "\r\n" ;
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
}
?>

</body>
</html>


