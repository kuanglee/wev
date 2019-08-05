<?php
    class controller_add_edit_category_product extends controller{
      public function __construct(){
        parent:: __construct();
        $act = isset($_GET["act"]) ? $_GET["act"] :"";
        $id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"] : 0;
        switch ($act) {
          case 'edit':
              $form_action = "admin.php?controller=add_edit_category_product&act=do_edit&id=$id";

              // lay ban ghi co id truyen vao
              $arr = $this->model->fetch_one("select * from tbl_category_product where pk_category_product_id = $id");
              //print_r($arr);

              include "view/backend/view_add_edit_category_product.php";
            break;
          case "do_edit":
              //echo "dudfds";
              //$username = $_POST["c_username"];
              // echo "day la full name " . $username;
              $c_name = $_POST["c_name"];
              $this->model->execute("UPDATE tbl_category_product set c_name = '$c_name'  WHERE pk_category_product_id= $id");
              header("location:admin.php?controller=category_product");

            break;
            case 'add':
                echo "day la ADD";
                $form_action = "admin.php?controller=add_edit_category_product&act=do_add";
                include "view/backend/view_add_edit_category_product.php";
              break;
            case "do_add":
              //  echo "";
                $c_name = $_POST["c_name"];
                //echo "fuck" . $c_name;
                $this->model->execute("INSERT INTO tbl_category_product (c_name) VALUES ('$c_name')");
                header("location:admin.php?controller=category_product");

              break;

          default:
            // code...
            break;
        }
      }
    }
    new controller_add_edit_category_product();












 ?>
