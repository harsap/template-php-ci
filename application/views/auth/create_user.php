<h1><?php echo lang('create_user_heading'); ?></h1>
<p><?php echo lang('create_user_subheading'); ?></p>

<?php if (!empty($message)) { ?>
    <div class="alert alert-danger">
        <span class="pficon pficon-error-circle-o"></span>
        <?php echo $message; ?>
    </div>
<?php } ?>
<?php echo form_open("auth/create_user", array("class" => "form-horizontal")); ?>
<div class="row">
<div class="form-group">
    <label class="col-sm-2 control-label"  > <?php echo lang('create_user_fname_label', 'first_name'); ?> </label>
    <div class="col-sm-5">
        <?php echo form_input($first_name,"", array("class" => "form-control" )); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label" > <?php echo lang('create_user_lname_label', 'last_name'); ?> </label>
    <div class="col-sm-5"> <?php echo form_input($last_name,"", array("class" => "form-control")); ?></div> 
</div>

 
<div class="form-group">
    <label class="col-sm-2 control-label"  > <?php echo lang('create_user_identity_label', 'identity'); ?> </label> 
    <div class="col-sm-3">  <?php echo form_input($identity,"", array("class" => "form-control")); ?></div> 
</div>
<div class="form-group">
    <label class="col-sm-2 control-label"  > <?php echo lang('create_user_company_label', 'company'); ?> </label> 
    <div class="col-sm-5">  <?php echo form_input($company,"", array("class" => "form-control")); ?></div> 
</div>

<div class="form-group">
    <label class="col-sm-2 control-label"  >  <?php echo lang('create_user_email_label', 'email'); ?> </label> 
    <div class="col-sm-4"> <?php echo form_input($email,"", array("class" => "form-control")); ?></div> 
</div>

<div class="form-group">
    <label class="col-sm-2 control-label"  >   <?php echo lang('create_user_phone_label', 'phone'); ?></label> 
    <div class="col-sm-3"> <?php echo form_input($phone,"", array("class" => "form-control")); ?></div> 
</div>

<div class="form-group">
    <label class="col-sm-2 control-label"  >  <?php echo lang('create_user_password_label', 'password'); ?> </label> 
    <div class="col-sm-3">  <?php echo form_input($password,"", array("class" => "form-control")); ?></div> 
</div>

<div class="form-group">
    <label class="col-sm-2 control-label"  >    <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> </label> 
    <div class="col-sm-3">  <?php echo form_input($password_confirm,"", array("class" => "form-control")); ?></div> 
</div>


<div class="col-xs-8 col-sm-offset-2 col-sm-6 col-md-offset-2 col-md-6 submit"><?php echo form_submit('submit', lang('create_user_submit_btn'), array("class" => "btn btn-primary")); ?></div>

<?php echo form_close(); ?>
</div>