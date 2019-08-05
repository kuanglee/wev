<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="tieude">Bai tap thuc hanh </div>
    <div class="noidung">

      <?php
        if(isset($_COOKIE['user']) && isset($_COOKIE['password'])){
          echo("ten truy cap :" . $_COOKIE['user']);
          echo("ten truy cap :" . $_COOKIE['password']);
        }
        else {
          echo("cookie khong ton tai ");

        }

       ?>
       <br> <a href="cookie.php">Tro ve trang cookie</a>
       <a href="deletecookie.php">Huy cookie </a>
    </div>
  </body>
</html>
