<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        $to='bethmarsh1018@gmail.com';
        $subject='Form Submission';
        $message="Name: ".$name."\n". "Wrote the following: "."\n\n".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Message Sent! Thank you"." ".$name.".</h1>";
        } else {
            echo "Something went wrong.";
        }
    }
?>