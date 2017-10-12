<?php include('user_header.php');?>
<div class="container">
  
    <?php echo form_open("login/admin_login",['class'=>'form-horizontal']);?>

  <fieldset>
    <legend>Admin Login</legend>
      <div class="row">
         <div class="col-lg-6"> 
          <div class="form-group">
            <label for="inputUsername" class="col-lg-2 control-label">Username</label>
            <div class="col-lg-10">
              <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'username']); ?>
            </div>
          </div>
         </div>
         <div class="col-lg-6">
           <?php echo form_error('username'); ?>
         </div>
      </div>
        <div class="row">
         <div class="col-lg-6"> 
          <div class="form-group">
            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
            <div class="col-lg-10">
              <?php echo form_input(['name'=>'password','class'=>'form-control','placeholder'=>'password']); ?>
            </div>
          </div>
         </div>
         <div class="col-lg-6">
           <?php echo form_error('password'); ?>
         </div>
      </div>

    
		<p>aj;klhajkl;ajhj;</p>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">     
           
            <?php echo 
                      form_reset (['name'=>'reset','value'=>'reset','class'=>'btn btn-default']),
                      form_submit (['name'=>'submit','value'=>'login','class'=>'btn btn-primary']);
                       ?>
          
      </div>
    </div>
  </fieldset>
</form>
</div>

<?php include('user_footer.php');?>
