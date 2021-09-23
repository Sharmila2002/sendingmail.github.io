<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending email part 1</title>
</head>
<body>
<?php
//this is for self submission 


if(isset($_POST["submit"]))
{

   $name=$_POST["name"];
   $email=$_POST["email"];
   $phone=$_POST["mobile"];
   $message=$_POST["message"];

   // echo $name;
    //echo $message;
    //check existance 
     if($name && $message)
     {
        //
        ini_set("SMTP", "sharmilabhosale2020@gmail.com");
         
         $to="sharmilabhosa2020@gmail.com";
        $subject="from $name";
        $headers= "From: $name";
        $body= " His/her mobile is $phone  \n\n & email is $email \n\n\n\n He/she said $message  ";  
         
         mail($to,$subject,$body,$headers);

            die( " <p> Thanks For Submitting</p> ");
    
    }

         else{


              die("Enter name & message its required " );
         }
     
}





?>
</body>
</html>