
<?php include 'include/head.php';?>

<?php include 'include/menu.php';?>

<div class="container">
  <div class="row">
      <div class="row col-md-4 col-md-offset-4">
          <br>
          <div class="panel panel-default">
              <div class="panel-heading">
                    <h3 class="panel-title">Insertar Usuarios</h3>
              </div>
              <div class="panel-body">
                    <div class="form-group">
                          <label for="usuario" class="control-label">Usuario:</label>
                          <input type="text" class="form-control" id="usuario">
                    </div>
                    <div class="form-group">
                          <label for="pass" class="control-label">Password:</label>
                          <input type="password" class="form-control" id="pass">
                    </div>
                    <div class="form-group">
                          <input class="btn btn-success" type="button" value="registrar" id="btnregistrar">
                    </div>
              </div>
          </div>
      </div>
    </div>
</div>
<div class="container">
      <div class="row">
            <div class="col-md-4 col-md-offset-4">
                  <div id="resultado">
                        <!-- resultado ajax aquí -->
                  </div>
            </div>
      </div>
</div>


<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/code.js"></script>

<?php include 'include/footer.php';?>