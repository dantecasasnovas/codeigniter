<?php echo form_open("/Control/Control_model") ?>
<?php

$user = [
	'name' 		  => 'user_name',
	'placeholder' => 'Write your User',
	'class' 	  => 'form-control',
	'type' 		  => 'text'
];

$last_name = [
	'name' 		  => 'user_last_name',
	'placeholder' => 'Write your Last Name',
	'class' 	  => 'form-control',
	'type' 		  => 'text'
];

$phone = [
	'name' 		  => 'user_phone',
	'placeholder' => 'Add your Phone',
	'class' 	  => 'form-control',
	'type' 		  => 'text'
];

$email = [
	'name' 		  => 'user_email',
	'placeholder' => 'Write your Email',
	'class' 	  => 'form-control',
	'type' 		  => 'text'
];

$password = [
	'name' 		  => 'user_password',
	'placeholder' => 'Write your Password',
	'class' 	  => 'form-control',
	'type' 		  => 'password'
];

$send = [
	'value' 	=> 'Send',
	'type' 		=> 'submit',
	'class' 	=> 'btn btn-primary'
];

?>
<center>

	<div class="container-fluid" >
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="form-login-heading">This page is for add a new user</h2>
				</div>

				<div align="left" class="form-group col-md-4">
					<?php echo form_label('User: ', 'user')?>
					<?php echo form_input($user)?>
				</div>

				<div align="left" class="form-group col-md-4">
					<?php echo form_label('Last Name: ', 'las_name')?>
					<?php echo form_input($last_name)?>
				</div>

				<div align="left" class="form-group col-md-4">
					<?php echo form_label('Phone: ', 'phone')?>
					<?php echo form_input($phone)?>
				</div>

				<div align="left" class="form-group col-md-4">
					<?php echo form_label('Email: ', 'email')?>
					<?php echo form_input($email)?>
				</div>
				<div align="left" class="form-group col-md-4">
					<?php echo form_label('Password: ', 'password')?>
					<?php echo form_input($password)?>
				</div>

				<?php echo form_submit($send)?>

				<?php form_close()?>

			</div>
		</div>
	</div>