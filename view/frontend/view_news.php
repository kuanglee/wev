<h1>Tin tức</h1>
        <div class="wrapper-blog">
          <?php foreach ($arr as $rows) { ?>
          <!-- list news -->
          <!-- <div class="row"> -->
            <div class="col-md-6 article">
              <a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>" class="image">
              <img src="public/upload/news/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>" class="img-responsive"> </a>
              <h3><a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>">
                <?php echo $rows->c_name; ?></a></h3>
              <p class="date">11/01/2016</p>
              <p class="desc"><?php echo $rows->c_description; ?></p>
            </div>


        <?php } ?>
          <!-- end list news -->

          <!-- end list news -->
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li> <a href="#">Trang</a></li>
            <?php
              for ($i=1; $i <= $num_page ; $i++) {

             ?>
            <li> <a href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php } ?>
          </ul>
        </div>
