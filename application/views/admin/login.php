<?php include('header.php'); ?>

<div class="container mt-4">
	<h1>Admin Form</h1>
<?php echo form_open('admin/index'); ?>
  <div class="row">
  	<div class="col-md-6">
  <div class="form-group">
    <label for="username">Username:</label>
   <?php echo form_input(['class' => 'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
  </div>
</div>
<div class="col-md-6 mt-4">
   <?php 	echo form_error('uname'); ?>
</div>
</div>
  <div class="row">
  	<div class="col-md-6">
  <div class="form-group">
    <label for="pwd">Password:</label>
    <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'pass','value'=>set_value('pass')]); ?>
  </div>
</div>
<div class="col-md-6 mt-4">
   <?php 	echo form_error('pass'); ?>
</div>
</div>

  <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>
   <?php echo form_reset(['type'=>'reset','class'=>'btn btn-danger','value'=>'Reset']); ?>
  

</div>
<?php include('footer.php'); ?>