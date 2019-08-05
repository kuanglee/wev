<?php
  class controller_news extends controller{
    public function __construct(){
      parent:: __construct();



      //---------------------

      //------------------
      // so ban ghi tren trang
      $record_per_page = 4;
      // tinh so ban ghi
      $total_record = $this->model->num_rows("select * from tbl_news");
      $num_page = ceil($total_record/$record_per_page);
      // lay bien tu url de xac dinh den trang thu may
      $p = isset($_GET["p"])&&$_GET["p"]>0 ? ($_GET["p"] - 1) : 0;
      //xac dinh lay du lieu tu ban ghi nao
      $from = $p*$record_per_page;
      // thuc hien truy van csdl
      $arr = $this->model->fetch("select * from tbl_news order by pk_news_id desc limit $from , $record_per_page");

      //load view
      include "view/frontend/view_news.php";
      //------------------
    }



  }
  new controller_news();






 ?>
