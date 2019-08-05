<div class="col-md8 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">Category Product</div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?php echo $form_action; ?>">
        <div class="form-group">
          <label class="col-md-2">Name</label>
          <div class="col-md-10"><input type="text" name="c_name"
            class="form-control" value="<?php echo isset($arr->c_name)? $arr->c_name : "";  ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">Name</label>
          <div class="col-md-10"><input type="checkbox" name="c_hotnews"
           value="hotnews"   <?php echo isset($arr->c_hotnews)&&$arr->c_hotnews==1? "checked" : "";  ?> > Hot news
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">Description</label>
          <div class="col-md-10">
            <textarea name="c_description" class="col-md-12 ">
              <?php echo isset($arr->c_description)? $arr->c_description :""; ?>
            </textarea>
          <script type="text/javascript">
            CKEDITOR.replace('c_description');
          </script>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">Content</label>
          <div class="col-md-10"> <textarea name="c_content" class="col-md-12 ">
            <?php echo isset($arr->c_content)? $arr->c_content :""; ?>
          </textarea>
          <script type="text/javascript">
            CKEDITOR.replace('c_content');
          </script>
          </div>
        </div>

        <div class="form-group">
					<label class="col-md-2"></label>
					<div class="col-md-10">
					<input type="file" name="c_img">
					</div>
				</div>
        <div class="form-group">
					<label class="col-md-2">UPLOAD ảnh</label>
					<div class="col-md-10">
					<?php if(isset($arr->c_img)&&file_exists("public/upload/news/".$arr->c_img&&$arr->c_img!="")){ ?>
					<img src="public/upload/news/<?php echo $arr->c_img; ?>" style="max-width: 100px;">
					<?php } ?>
					</div>
				</div>

        <div class="form-group">
          <label class="col-md-2"></label>
          <div class="col-md-10"><input type="submit" name="" value="Process"
            class="btn btn-primary"">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
