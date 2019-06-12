<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link rel="stylesheet" href="/concesionario/css/style6.css">

  <title>Document</title>
</head>
<body>
<div class="top-head pt-1 border">
<div class="container">
	<div class="row ">
	  <div class="col-md-12 text-right">
		<ul class="list-inline ">
        <a href="#"><li class="list-inline-item"><i class="fa fa-user"></i><?php  include("database.php");
        session_start(); echo $_SESSION['users'];?> </a></small></li></a>
		    <a href="/concesionario/perfil/admin/logout.php"><li class="list-inline-item"><small>Cerrar Sesion</small></li></a>
		  </ul>
	  </div>
	</div>
</div>
</div>
<nav class="navbar navbar-expand-sm bg-light navbar-light border">
  <div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
  <a class="navbar-brand font-bold" href="/concesionario/index.html">ZONA<span>UTOMOVIL</span></a>
  </a>
   <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
      <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
        New
      </a>
      
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
        Used
      </a>
     
    </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Carros populares</a>
      </li>
      
      
      <form class="form-inline" action="#">
    <input class="form-control mr-sm-2" type="text" placeholder="Search Cars">
    <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
  </form>
    </ul>
  </div>
 </div>
</nav>
<div class="ad-top border py-1 hidden-xs " style="margin-top:0px;">
 <div class="container-fluid ">
	<div class="row justify-content-md-center ">
	    <div class="adbox-img">
	         <img src="" class="img-thumbnail" alt="Cinque Terre"> 
	   </div>
		</div>
 </div>
</div>
<div class="bread-bar bg-grey">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-sm-6 col-xs-8">
                    <ol class="breadcrumb">
                        <li><a href="/concesionario/index.html">Home</a></li>
                        <li class="active">Catalogo Ventas</li>
                    </ol>
            	</div>
                <div class="col-md-4 col-sm-6 col-xs-4">
                </div>
            </div>
      	</div>
    </div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Overview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Price</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Specification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pictures</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Color</a>
        </li>
        
      </ul>
    </div>  
</nav>

<div class="overview-image-info-area py-5">
        <div class="container" >
              <div class="row ">
              <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                <li data-target="#carousel1_indicator" data-slide-to="2"></li>
              </ol>  
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="/concesionario/vehiculos/bmw1.jpg" alt="First slide"> 
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/concesionario/vehiculos/BMW i8 Coupé 2019/bmwex1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="/concesionario/vehiculos/BMW i8 Coupé 2019/interior1.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
      </div>
                </div>
                <div class="col-md-5">
                    <div class="pt-4"></div>
                    <div class="overview-title">

                        <h2>BMW i8 Coupé 2019</h2>
                    </div>
                    <div class="overview-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="overview-pricing">
                        <h3><i class="fa fa-inr"></i> 255`000.000 - 320`000.000 Pesos*</h3>
                    </div>
                    <div class="exshowroom-pricing">
                       
                        <div class="form-group">
  <label for="sel1">*precio</label>
  <select class="form-control" id="sel1">
    <option>Bogota</option>
    <option>Medellin</option>
    <option>Cali</option>
    <option>Pasto</option>
  </select>
</div>
                    </div>
                    <div class="overview-btns">
                        <button type="button" class="btn btn-success">Comprar</button>
                        <button type="button" class="btn btn-warning">Reservar</button>

                    </div>
                    
                </div>
            
        </div>
    </div>
</div>

		
</div>
</div>
<div class="text-area mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Información</h3>
            </div>
            
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <p>BMW i8 Coupé:
              Rendmiento de combustible combinado en l/100 km: 2
              Emisiones de CO2 en g/km (combinado):42
              Los valores de rendimiento de combustible, emisiones de CO2 y rango eléctrico están basados en el ciclo WLTP y se obtuvieron en condiciones controladas de laboratorio, que bien pueden no ser reproducibles ni obtenerse en condiciones y hábitos de manejo convencionales, debido a condiciones climatológicas, combustible, condiciones topográficas y otros factores.</p>
            </div>
        </div>
    </div>
</div>
<div class="variant-area mt-4">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		    <h3>BMW i8 Coupé Variantes</h3>
		</div>
	</div>
	<hr>
	<div class="row">
	    <div class="col-md-8">
	        <table class="table table-hover">
    <thead class="bg-warning">
    <tr>
      <th>Variant</th>
      <th>Ex-Showroom Price</th>
      <th>.</th>
      <th>Compare</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
   
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">W11 Option AWD</a><br>
        <small>2179 cc,  Manual, Diesel, 0.0 kmpl	</small>
      </th>
      <td><a href="#">Rs 16.5 Lakh</a><br>
      <a href="#"><small>Get On Road Price</small></a>
      </td>
      <td><button type="button" class="btn btn-outline-danger">Get On Road Price</button></td>
      <td><div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
  </label>
</div></td>
    </tr>
    
  </tbody>
</table>
            <div class="row my-4">
    <div class="col-md-12">
        <div id="accordion">
          <div class="card">
            <div class="card-header ">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Specifications <i class="fa fa-angle-down fa-2x pull-right"></i></a> 
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
              <div class="card-body">
                <p>El BMW i8 Coupé es futurista hasta en el mínimo detalle. Su diseño transmite máximo dinamismo. El detalle más llamativo: las originales puertas de ala de gaviota, hechas de fibra de carbono ligero, que permiten una cómoda apertura. El atlético frontal sigue mostrando el carácter único del vehículo y exhibe con orgullo la parrilla doble BMW, flanqueada por faros LED integrales y el sistema Air Curtain rediseñado. El distintivo «Black Belt», que emerge en el capó, se prolonga por todo </p>
              </div>
            </div>
          </div>
          
	    </div>
	    <div class="col-md-4">
	        <div class="card">
	            <div class="card-body">
	                <img src="" alt="">
	            </div>
	        </div>
	    </div>
	</div>
	
</div>
</div>
<div class="video-area py-5 bg-secondary text-white">
<div class="container">
	<div class="row">
		<div class="col-md-12">
		    <h3>BMW i8 Coupé videos </h3>
		    <p>Get up-to-date expert videos of BMW i8 Coupé - Subscribe Now! See below our handpicked Yaris Videos from Youtube and Web.</p>
		    
		</div>
	</div>
	<div class="row">
	    <div class="col-md-4">
      <iframe width="356" height="200" src="https://www.youtube.com/embed/a_IUGT7t5d8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </div>
	     <div class="col-md-4">
       <iframe width="356" height="200" src="https://www.youtube.com/embed/TG345UrOCAo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </div>
	     <div class="col-md-4">
       <iframe width="356" height="200" src="https://www.youtube.com/embed/MObu6S813e0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </div>
	</div>
	<div class="row pt-4">
	    <div class="col-md-12 text-center">
	        <button type="button" class="btn btn-light">View All Videos</button>
	    </div>
	</div>
</div>
</div>




<div class="copyright bglight1 border pt-2">
    <div class="container" aling="center">
        <div class="row justify-content-md-center">
            <p> © 2019 wolfSoftware Ltd. </p>
        </div>
    </div>
</div>
</body>
</html>

