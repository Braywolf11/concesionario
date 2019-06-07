<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/concesionario/css/style3.css">
  <title>login</title>
</head>
<body>
    <section class="login-block">
        <div class="container">
          <div class="row">
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login</h2>
      <form class="login-form"action="/concesionario/conexion/verificar.php" method="POST">
            <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" placeholder="user@motor.co" name="user">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" placeholder="password" name="pass">
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
                <small>Remember Me</small>
            </label>
        <button type="submit" class="btn btn-login float-right">Submit</button>
      </div>
      
    </form>
    <div class="copy-text">lamborghini <i class="fa fa-heart"></i> by <a href="https://www.lamborghini.com/es-en">lamborghini.com</a></div>
        </div>
        <div class="col-md-8 banner-sec">
        <div class="carousel-item active">
          <img class="d-block img-fluid" src="/concesionario/vehiculos/logos.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="banner-text">
                <h1>TE FELICITAMOS POR SER PARTE DE NUESTRA COMPAÑIA</h1>
                <h3>En zona automovil queremos que te sientas como en casa y por eso te tratamos como de la famila, gracias por elejirnos</h3>
            </div>	
      </div>
    </div>
   </div>	   
		    
		</div>
	</div>
</div>
</section>
    
</body>
</html>