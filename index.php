<?php
   $name= $_REQUEST['full name'];
   $email= $_REQUEST['email'];
   $phone= $_REQUEST['phone'];
   $message= $_REQUEST['message'];

   if(empty($name) || empty($email) || empty($phone) || empty($message) ){
           alert("Please Fill all the fields");
     }
     else{
        mail("jindalabhinandan@gmail.com", "Jishnu Sales","Name:<$name>Nl2br()Email:($email)Nl2br()Phone:($phone)Nl2br()Message:($message)");
        alert("Success");

     }


?>