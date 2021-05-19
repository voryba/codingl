<?php

    if(isset($_POST['btn-send'])) {
       $UserName = $_POST['fname'];
       $Sname = $_POST['sname'];
       $Email = $_POST['Email'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Sname) || empty($Msg)){
        header('location:contact.php?error');
       }
       else{
        $to = "erasabyr14@gmail.com";
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Your name <info@address.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        if(mail($to, $Sname, $Msg, $headers)){
          header("location:contact.php?success");
        }
       }
    }else{
      header("location:contact.php");
    }
?>
