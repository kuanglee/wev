<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="public/backend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/backend/css/bootstrap.min.css" type="text/css">
  </head>
  <body>
    <div class="container" style="margin-top:30px;">
      <div class="col-md-6 col-md-offset-3">
        <?php
          if (isset($_GET["err"]) && $_GET["err"]=="invalid") {
        ?>
        <div class="alert alert-danger">
          Sai Username Hoac password
        </div>
      <?php } ?>
        <div class="panel panel-primary">
          <div class="panel-heading">LOGIN</div>
          <div class="panel-body">
            <form action="" method="POST" style="paddi ng:0px;margin:0px;">
              <!--row -->
              <div class="row">
                <div class="col-md-2">Username</div>
                <div class="col-md-10"><input type="text" name="c_username" value="" require class="form-control"></div>

              </div>
              <!--END row -->

              <!--row -->
              <div class="row" style="margin-top: 5px;">
                <div class="col-md-2">Password</div>
                <div class="col-md-10"><input type="password" name="c_password" value="" require class="form-control"></div>
              </div>
              <!--END row -->

              <!--row -->
              <div class="row" style="margin-top: 5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10"><input type="submit" name="" value="Login" require class="btn btn-primary">
                  <input type="reset" name="" value="Reset" class="btn btn-danger"></div>
              </div>
              <!--END row -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
