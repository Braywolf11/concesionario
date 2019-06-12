
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="/concesionario/css/style4.css">
    <script src="/concesionario/js/javascrip2.js"></script>
    <title>Document</title>
</head>
<body>
<div class="log">
<nav class="mb-4 navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand font-bold" href="/concesionario/index.html">ZONAUTOMOVIL</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/concesionario/perfil/admin/logout.php"><i class="fa fa-gear"></i> cerrar sesion</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?php  include("database.php");
                            session_start();
                            echo $_SESSION['users'];?> </a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
</div><br><br>

<article>
  <div class="item-wrapper">
  <a href="/concesionario/perfil/admin/vehiculos/conf_vehiculo.php" >
  <figure>
      <div class="image" style="background-image:url(/concesionario/images/vehiculo.jpg);" ></div>
      <div class="lighting"></div>
    </figure>
    <div class="item-content">
      <h1>VEHICULOS</h1>
      <p>Actualizacion</p>      
    </div>
    </a>
    
  </div>
</article>
<article>
  <div class="item-wrapper">
  <a href="/concesionario/perfil/admin/Usuarios/conf_users.php" >
    <figure>
      <div class="image" style="background-image:url(/concesionario/images/usuarios.jpg);" ></div>
      <div class="lighting"></div>
    </figure>
    <div class="item-content">
      <p><h1>USUARIOS</h1></p>
      <p>Actualizacion</p>
     </div>
     </a> 
  </div>
</article>
<article>
  <div class="item-wrapper">
  <a href="/concesionario/perfil/admin/config/conf_vehiculo.php" >
    <figure>
      <div class="image" style="background-image:url(/concesionario/images/lof.jpg);"></div>
      <div class="lighting"></div>
  </figure>
    <div class="item-content">
      <h1>Slime</h1>
      <p>Actualizacion</p>
    </div>
    </a>
  </div>
</article>
<script>
    var articles = $('article > .item-wrapper'),
    lightingRgb = '255,255,255';

articles.mousemove(function(e) {
  var current = $(this),
      x = current.width() - e.offsetX * 2,
      y = current.height() - e.offsetY * 2,
      rx = -x / 30,
      ry = y / 24,
      deg = Math.atan2(y, x) * (180 / Math.PI) + 45;
  current.css({"transform":"scale(1.05) rotateY("+rx+"deg) rotateX("+ry+"deg)"});
  $('figure > .lighting',this).css('background','linear-gradient('+deg+'deg, rgba('+lightingRgb+',0.32) 0%, rgba('+lightingRgb+',0) 100%)');
});

articles.on({
  'mouseenter':function() {
    var current = $(this);
    current.addClass('enter ease').removeClass("leave");
    setTimeout(function(){
      current.removeClass('ease');
    }, 280);
  },
  'mouseleave':function() {
    var current = $(this);
    current.css({"transform":"rotate(0)"});
    current.removeClass('enter').addClass("leave");
    $('figure > .lighting',this).removeAttr('style');
  }}
);
</script>
</body>
</html>