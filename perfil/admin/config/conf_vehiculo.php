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
		<title>MegaMenu Design</title>
	</head>
	<body>
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
                                echo "<td><div align='center' ><a href='photos.php'><img src = '/concesionario/icons/eye.png' width='30'></a></div></td>";
                                echo "<td><div align='center' ><a href='/concesionario/perfil/admin/config/update.php'><img src = '/concesionario/icons/edit.png' width='30'></a></div></td>";
                                echo "<td><div align='center' ><a href = 'imprimir.php'><img src = '/concesionario/icons/delete.png' width='30'></a></div></td>";
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