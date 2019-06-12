<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="/concesionario/css/style5.css">
        <script src="/concesionario/js/javascrip3.js"></script>
        <style>
        body { background-image: url("/concesionario/images/16C.jpg"); }
        </style>
		<title>MegaMenu Design</title>
	</head>
	<body >
    <nav class="navbar navbar-default" >
        <div class="container">
            <div class="navbar-header" rgbcolor="black">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/concesionario/index.html">
                <img alt="Brand" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC">
            </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/concesionario/perfil/admin/admin.php">cerrar</a></li> 
            <li><a href="#"><?php  include("database.php");
                            session_start();
                            echo $_SESSION['users'];?></a></li>
            </ul>
            </div>
        </div>
        </nav>
		<div class="container" style="margin: 25px auto;">
	    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Precio</th>
                <th>estado</th>
                <th>Photos</th>
                <th>Actualizar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
       
            <?php

                include("database.php");

                $sql = "SELECT * from vehiculos";
                $result = $conn->query($sql);
                //id,documento_id,Nombres,Apellidos,fecha_nac,eps,sexo
                if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<tr>";
                                echo "<td>".$row['marca']."</td>";
                                echo "<td>".$row['Nombre']."</td>";
                                echo "<td>".$row['modelo']."</td>";
                                echo "<td>".$row['color']."</td>";
                                echo "<td>".$row['precio']."</td>";
                                echo "<td>".$row['estado']."</td>";
                                echo "<td><div align='center' ><a href='/concesionario/perfil/admin/vehiculos/config/photos.php'><img src = '/concesionario/icons/eye.png' width='30'></a></div></td>";
                                echo "<td><div align='center' ><a href='/concesionario/perfil/admin/vehiculos/config/update.php?id=".$row['id']."&marca=".$row['marca']."&Nombre="
                                .$row['Nombre']."&modelo=".$row['modelo']."&color=".$row['color']."&precio=".$row['precio']."&photo=".$row['photo']."&estado=".$row['estado']."'>
                                <img src = '/concesionario/icons/edit.png' width='30'></a></div></td>";
                                echo "<td><div align='center' ><a href = '/concesionario/perfil/admin/vehiculos/config/borrar/delete.php?id=".$row['id']."&marca=".$row['marca']."'><img src = '/concesionario/icons/delete.png' width='30'></a></div></td>";
                            echo "</tr>";
                        }
                    }else
                    {
                        echo "No hay productos registrados";
                    }

                ?>
        </tbody>
    </table>
		
        </div><!--container-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
      
	</body>
</html>