<div class="online_support block">
  <div class="new_title">
  <h2>Hỗ trợ trực tuyến</h2>
  </div>
  <div class="block-content">
    <?php $arr_support = $this->model->fetch("select * from tbl_support order by pk_support_id asc") ?>
<?php foreach ($arr_support as $arrsp){?>
  <div class="sp_1">

    <p><?php echo $arrsp->c_name;  ?></p>
    <p><?php echo $arrsp->c_contact; ?></p>

  </div>
<?php } ?>
  </div>
</div>
