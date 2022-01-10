<?php

if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


//to
$receive_mail= "hashan.ranasinghe98@gmail.com";

$email_content = $subject."\n\nYou have received email from ".$name."(".$email.").\n\n".$message;

//from

$email_headers = "From: zillion.shopper@gmail.com";

if(mail($receive_mail,$subject,$email_content,$email_headers)){
    header("Location:../index.php?mailsend=succeeded");

}else{
    header("Location:../index.php?mailsend=unsucceeded");
}


}


?>