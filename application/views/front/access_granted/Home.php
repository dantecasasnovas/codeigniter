<?php $view['user'] = $this->session->get_userdata();

// var_dump($view);die();
?>

<body>

  <div class="container-fluid" >

    <div align="" class="sidenav">
      <center><b><font size="4">Welcome <br> <?php echo $view['user']['user_name']; ?></font></b></center>

      <a href="<?php echo site_url('Profile/profile'); ?>">Perfil</a>
      <a href="">Home</a>
      <a href="<?php echo site_url('Transfer/transfer'); ?>">Transferir</a>
      <a href="log_out">Salir</a>
    </div>

    <div class="main">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="container">
              <div class="abs-center">
                <div class="modal-content">
                  <div class="modal-dialog">
                    <div align="center" class="modal-content">
                      <div class="modal-header">
                        Your amount is: <br> <?php echo $view['user']['wallet_money'];?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>