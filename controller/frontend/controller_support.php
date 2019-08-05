<?php
      class controller_support extends controller{
          function __construct(){
            parent::__construct();
            include "view/frontend/view_support.php";
          }
      }
      new controller_support();


 ?>
