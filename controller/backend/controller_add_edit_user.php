<?php
    class controller_add_edit_user extends controller{
      public function __construct(){
        parent:: __construct();
        $act = isset($_GET["act"]) ? $_GET["act"] :"";
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        switch ($act) {
          case 'edit':
              $form_action = "admin.php?controller=add_edit_user&act=do_edit&id=$id";

              // lay ban ghi co id truyen vao
              $arr = $this->model->fetch_one("select * from tbl_user where pk_user_id = $id");
              print_r($arr);

              include "view/backend/view_add_edit_user.php";
            break;
          case "do_edit":
              echo "dudfds";
              //$username = $_POST["c_username"];
              // echo "day la full name " . $username;
              $password = $_POST["c_password"];
              $fullname = $_POST["c_fullname"];
              $this->model->execute("UPDATE tbl_user set c_fullname = '$fullname'  WHERE pk_user_id = $id");
                if ($password !="") {
                  $password = md5($password);
                  $this->model->execute("UPDATE tbl_user set  c_password = '$password' WHERE pk_user_id = $id");
                }
              header("location:admin.php?controller=user");

            break;
            case 'add':
                $form_action = "admin.php?controller=add_edit_user&act=do_add";
                include "view/backend/view_add_edit_user.php";
              break;
            case 'do_add':
                $c_password = md5($_POST["c_password"]);
                echo $c_password;
                $c_username = $_POST["c_username"];
                echo $c_username;
                $c_fullname = $_POST["c_fullname"];
                echo $c_fullname;
                $this->model->execute("INSERT INTO tbl_user (c_username , c_password , c_fullname) VALUES ('$c_username' , '$c_password' , '$c_fullname')");
                header("location:admin.php?controller=user");
              break;

          default:
            // code...
            break;
        }
      }
    }
    new controller_add_edit_user();












 ?>
