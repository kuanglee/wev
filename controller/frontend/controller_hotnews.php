<?php
      class controller_hotnews extends controller{
          function __construct(){
            parent::__construct();
            $arr_hotnews = $this->model->fetch("select * from tbl_news order by pk_news_id asc");
            include "view/frontend/view_hotnews.php";
          }
      }
      new controller_hotnews();


 ?>
