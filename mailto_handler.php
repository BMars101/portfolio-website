<?php
    if($_POST['message']){
       mail("bethmarsh1018@gmail.com", "Message",
       $_POST["Message from"]. "From: $email");
    }
?>