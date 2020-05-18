<?php
$name = $_POST['name']; 
$email = $_POST['email']; 
$phone = $_POST['phone'];
$desc = $_POST['comment'];
$city = $_POST['city'];
$product = $_POST['product'];
$message = "Name : ".$name.  "\n Email : ". $email. "\n Phone". $phone . "\n desc : ". $desc . "\n city : ". $city . "\n product : ". $product;
$to = "siddharth.malhotra91@gmail.com, info@diamondgenerator.com , hb99970@gmail.com, rs.diamond2018@gmail.com, ayushdiamond1@gmail.com ";
$subject = "Query from Diamond Generators";
$headers = 'From: <info@diamondgenerator.com>' . "\r\n";
 

if(mail($to,$subject,$message,$headers)) {
       header("Location:http://diamondgenerator.com/thankYou.php");
    } else {
        header("Location:http://diamondgenerator.com/contact.php");
    }



 ?>