<?php echo form_open('Control/login') ?>
<?php
$user_email = [
    'name' => 'user_email',
    'placeholder' => 'Write your Email',
    'class' => 'form-control placeholder-no-fix',
    'onkeyup' => "this.value=this.value.replace(/ /g,'');",
    'autocomplete' => 'off'
];

$user_password = [
    'name' => 'user_password',
    'placeholder' => 'Write your Password',
    'class' => 'form-control placeholder-no-fix',
    'onkeyup' => "this.value=this.value.replace(/ /g,'');",
    'autocomplete' => 'off'
];

$log_in = [
    'value' => 'Log In',
    'type' => 'submit',
    'class' => 'btn btn-success'
];

$clear = [
    'value' => 'Clear',
    'type' => 'reset',
    'class' => 'btn btn-warning'
]; ?>

<div class="container-fluid" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="form-login-heading">Add your Data</h2>
            </div>

            <div class="modal-body">
                <?php echo form_input($user_email)?>
            </div>

            <div class="modal-body">
                <?php echo form_input($user_password)?>
            </div>

            <div class="modal-footer">

                <?php echo form_submit($log_in)?>
                <?php echo form_submit($clear)?>
                <?php echo form_close() ?>

                <?php echo form_open("Control/new_user") ?>
                <?php
                $send = [
                    'value' => 'Registre',
                    'type' => 'submit',
                    'class' => 'btn btn-primary',
                ]; ?>
                <?php echo form_submit($send)?>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>