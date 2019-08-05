<div class="col-md8 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading">Add edit user</div>
    <div class="panel-body">
      <form class="form-horizontal" method="post" action="<?php echo $form_action; ?>">
        <div class="form-group">
          <label class="col-md-2">Username </label>
          <div class="col-md-10"><input type="text" name="c_username"
            class="form-control" <?php echo isset($arr->c_username) ? "disabled" : "require"; ?> value="<?php echo isset($arr->c_username)? $arr->c_username : "";  ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">Password</label>
          <div class="col-md-10"><input type="password" name="c_password" required
            <?php if (isset($arr->c_password)) { ?> placeholder="Nhap password neu thay doi password"<?php } ?>  class="form-control" ">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2">Fullname</label>
          <div class="col-md-10"><input type="text" name="c_fullname"
            class="form-control" value="<?php echo isset($arr->c_fullname)? $arr->c_fullname : "";  ?>">
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
