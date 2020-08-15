<?php include('header.php') ?>


<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Secure Contract Online</b></a>
  </div>

   <!--logo/imagen-->
   <div class="container">          
      <img src="dist/img/SCO_Png_.png" class="mx-auto d-block" style="width:20%"> 
    </div>
    

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrar una nueva cuenta</p>

      <form action="../../index.html" method="post">
        <!-- primer nombre-->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          <!-- primer nombre-->
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Last name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

         <!-- correo-->
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- contraseña-->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- confirmar contraseña-->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

      <!--estado civil-->
        <div class="input-group mb-3"> 
          <div class="dropdown">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
             Estado Civil
             </button>
               <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Soltero</a>
                <a class="dropdown-item active" href="#">Union Libre</a>
                <a class="dropdown-item active" href="#">Casado</a>
                <a class="dropdown-item active" href="#">Viudo</a>
              </div>
         </div>  
        </div>



          <!-- sexo-->
          
         <div class="input-group mb-3"> 
          <div class="dropdown">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
             sexo
             </button>
               <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Femenino</a>
                <a class="dropdown-item active" href="#">Maculino</a>
              </div>
        </div>
        </div>


        
        <!--de acuerdo con los terminos-->
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Acepta <a href="#">terminos</a>
              </label>
            </div>
          </div>




           <!--boton registrar-->
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-warning btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          ingresar con Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          ingresar con Google+
        </a>
      </div>

      <a href="/login.php" class="text-center">Ya tengo una cuenta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->




<?php include('footer.php');  ?>