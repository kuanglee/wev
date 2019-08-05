<?php
  class controller_logout{
    public function __construct(){
      unset($_SESSION["c_username"]);
      header("location:admin.php");
    }
  }
  new controller_logout();  






 ?>
