<?php
    setcookie('user',$_POST['user'],time()-3600);
    setcookie('password',$_POST['password'],time()-3600);
    header("localtion:showcookie.php");






 ?>
