<?php $data['name'] = $this->session->get_userdata();

// var_dump($data['name']);die();?>

<body>

    <div class="container-fluid">

        <div class="sidenav">
          <center><b><font size="4">Bienvenido <br> <?php echo $data['name']['user_name']; ?></font></b></center>

          <a href="<?php echo site_url('Profile/profile'); ?>">Perfil</a>
          <a href="<?php echo site_url('Control/home'); ?>">Home</a>
          <a href="">Transferir</a>
          <a href="<?php echo site_url('Control/log_out'); ?>">Salir</a>
      </div>

      <?php echo form_open("/Operaciones/Transferir") ?>
      <input style="display:none" size="1" name="user_id" value="">

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
                                        <input style="display:none" size="1" name="user_id" value="">

                                        Your amount is: <br> <?php echo $data['name']['wallet_money'];?>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-15 col-md-offset-1">
                                <br>
                                <table width="100%">
                                    <tr>
                                        <td class="font1" align="center"> <b> Transferencia </b> </td>
                                    </tr>
                                </table>
                                <br>
                                <table border="1" class="table table-strid">
                                    <tr>
                                        <th>Persona a Transferir</th>
                                        <th>Monto a Transferir</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="receptor">
                                                <option value="<?php echo $data['name']['user_id'];?>"></option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="monto_transferir " size="10" maxlength="13" onkeypress="return Number(event)"></td>
                                    </tr>
                                </table>
                                <p align="center"><button class="btn btn-success">Transferir</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php form_close()?>
</div>

</body>
</html>