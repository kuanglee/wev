<?php
// chi list cac danh muc co san pham thuoc danh muc do
  $arr_catogory = $this->model->fetch("select * from tbl_category_product
  where pk_category_product_id =$id");
  //print_r($arr_catogory);

  foreach ($arr_catogory as $rows_category) {?>

<div class="wrapper-tab-collections" style="margin-top:0px;">
  <div class="tabs-container">
  <ul class="list-unstyled">
    <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
    <h2><?php echo $rows_category->c_name; ?></h2>
    </a></li>
  </ul>
  </div>
  <div class="tabs-content row">
  <div id="content-taba4" class="content-tab content-tab-proindex">
    <?php
      $arr_product = $this->model->fetch("select * from tbl_product where fk_category_product_id=".$rows_category->pk_category_product_id." order by pk_product_id desc limit 0,4 ")
    //  $arr_product = $this->model->fetch("select * from tbl_product where fk_category_product_id=".$rows_category->pk_category_product_id."order by pk_product_id desc limit 0,4 ");
      //$arr_product = $this->model->fetch("select * from tbl_product where fk_category_product_id=".$rows_category->pk_category_product_id." order by pk_product_id desc limit 0,4");

       ?>

    <!-- box product -->
    <?php foreach ($arr_product as $rows_product): ?>


    <div class="col-xs-6 col-md-3 col-sm-6 ">
      <div class="product-grid" id="product-1168979">
      <div class="image"> <a href="index.php?controller=product_detail&id=<?php echo $rows_product->pk_product_id; ?>"><img src="public/upload/product/<?php echo $rows_product->c_img; ?>" title="Sản phẩm ..." alt="Sản phẩm 2" class="img-responsive"></a> </div>
      <div class="info">
        <h3 class="name"><a href="index.php?controller=product_detail&id=<?php echo $rows_product->pk_product_id; ?>"><?php echo $rows_product->c_name; ?></a></h3>
        <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php number_format($rows_product->c_price); ?></span> </span> </p>
        <div class="action-btn">
        <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
          <a href="index.php?controller=product_detail&id=<?php echo $rows_product->pk_product_id; ?>" class="button">Chọn sản phẩm</a>
        </form>
        </div>
      </div>
      </div>
    </div>
    <!-- end box product -->
    <?php endforeach; ?>

  </div>
  </div>
</div>
<?php } ?>
