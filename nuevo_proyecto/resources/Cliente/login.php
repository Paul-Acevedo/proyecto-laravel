<?php include('header.php');  ?>

<div class="login-box">
  <div class="login-logo">
    <a href="/ejemplo.php"><b>Secure Contract Online </b></a> <!--aqui es donde va direccionar a la paginas que seran pegadas en public  -->
 
    <!--logo/imagen-->
   <div class="container">          
    <img src="dist/img/SCO_Png_.png" class="mx-auto d-block" style="width:25%"> 
  </div>

  </div>
  <!--/.login-logo -->
  <div class="card">
    
   
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresa para comenzar tu sesion</p>

      <form action="../../index3.html" method="post"> <!-- -->
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning btn-block">Sign In
        <!--    <a href="/starter.php"> </a> -->
           
            </button>

          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Ingresar con Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Ingresar con Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="/olvidar.php">Olvide mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="/registro.php" class="text-center">Registrar una nueva cuenta</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?php include('footer.php'); ?>