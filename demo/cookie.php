<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="tieude">Bai tap thuc hanh </div>
    <div class="noidung">
      <form method="post">
        Ten dang nhap : <input type="text" name="user" value=""><br><br>
        Pass         :<input type="password" name="password" value="">
        <input type="submit" name="login" value="Dang Nhap">
      </form>
      <?php
        if(isset($_POST['login'])){
          echo("qyang");
          setcookie('user',$_POST['user'],time() + 3000);
          setcookie('password',$_POST['password'],time() + 3000);
          header("location:showcookie.php");

        }

       ?>
    </div>
  </body>
</html>
