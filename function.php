<?php

class Contact {
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $db = "menu";
  public $mysqli;

  public function __construct() {
    return $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db)
  }

public function contact_us($data) {
    $name = $data['fname'];
    $surname = $data['sname'];
    $email = $data['fmail'];
    $message = $data['message'];

    $query = "INSERT INTO contact_us SET name = '$name', surname = '$surname', email = '$email', message = '$message'";

    return $this->mysqli->query($query);
}


}
