<?php $view['user'] = $this->session->get_userdata();//var_dump($view['user']['user_id']);die();?>

<body>

  <?php echo form_open('/Profile/edit/'.$view['user']['user_id'])?>
  <?php

  $id = [
    'name'  => 'user_id',
    'value' => $view['user']['user_id'],
    'style' => 'display:none'
  ];

  $user = [
    'name'  => 'user_name',
    'value' => $view['user']['user_name'],
    'class' => 'form-control',
    'type'  => 'text',
    'id'    => 'basic_url',
    'aria-describedby' => 'basic-addon3',
    'autocomplete'     => 'off'
  ];

  $last_name = [
    'name'  => 'user_last_name',
    'value' => $view['user']['user_last_name'],
    'class' => 'form-control',
    'type'  => 'text',
    'id'    => 'basic_url',
    'aria-describedby' => 'basic-addon3',
    'autocomplete'     => 'off'
  ];

  $phone = [
    'name'  => 'user_phone',
    'value' => $view['user']['user_phone'],
    'class' => 'form-control',
    'type'  => 'text',
    'id'    => 'basic_url',
    'aria-describedby' => 'basic-addon3',
    'autocomplete'     => 'off'
  ];

  $email = [
    'name'  => 'user_email',
    'value' => $view['user']['user_email'],
    'class' => 'form-control alert-danger',
    'type'  => 'text',
    'id'    => 'basic_url',
    'aria-describedby' => 'basic-addon3',
    'autocomplete'     => 'off'
  ];

  $edit = [
    'value' => 'Edit Profile',
    'type'  => 'submit',
    'class' => 'btn btn-success'
  ];
  ?>
  <div class="container-fluid" >

    <div align="" class="sidenav">
      <center><b><font size="4">Bienvenido <br> <?php echo $view['user']['user_name']; ?></font></b></center>

      <a href="">Perfil</a>
      <a href="<?php echo site_url('Control/home'); ?>">Home</a>
      <a href="<?php echo site_url('Transfer/transfer'); ?>">Transferir</a>
      <a href="<?php echo site_url('Control/log_out'); ?>">Salir</a>
    </div>

    <div class="container">
      <div class="main">
        <form action="" method="post" enctype="multipart/form-data" class="border p-4 form">
          <div class="modal-content">
            <div class="modal-header">
              <p align="center" class="form-login-heading"><?php echo $view['user']['user_name']; ?> in this page can edit your profile </p>
            </div>

            <div class="modal-body">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">Name</span>
                </div>
                <?php echo form_input($user)?>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">Last Name</span>
                </div>
                <?php echo form_input($last_name)?>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">Phone</span>
                </div>
                <?php echo form_input($phone)?>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text alert-danger" id="basic-addon3">Email</span>
                </div>
                <?php echo form_input($email)?>
              </div>
              <?php echo form_input($id)?>
            </div>

            <div class="modal-body">
              <center>
               <?php echo form_submit($edit)?>
               <?php echo form_close()?>

               <?php echo form_open('/Profile/delete/'.$view['user']['user_id'])?>
               <?php
               $id = [
                'name'  => 'user_id',
                'value' => $view['user']['user_id'],
                'style' => 'display:none'
              ];
              
              $delete = [
                'value' => 'Delete Account',
                'type'  => 'submit',
                'class' => 'btn btn-danger'
              ];
              ?>

              <?php echo form_submit($delete)?>
              <?php echo form_close()?>
            </center>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>