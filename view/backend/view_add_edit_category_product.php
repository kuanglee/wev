<div class="col-md8 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">Category Product</div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" action="<?php echo $form_action; ?>">
        <div class="form-group">
          <label class="col-md-2">Name</label>
          <div class="col-md-10"><input type="text" name="c_name"
            class="form-control" value="<?php echo isset($arr->c_name)? $arr->c_name : "";  ?>">
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
