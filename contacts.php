<?php

if (isset($_POST['submit'])) {
include_once 'function.php';

$object = new Contact() ;

$res = $object->contact_us($_POST);

if($res == true){
  echo "Successfully!";
}else {
  echo "Something went wrong!";
}
  $mysql->close();
  header('Location: /contacts.html');
}
?>
