
<?php
	include "database.php";
    $id =$_GET['id'];
    $sql="SELECT * FROM users WHERE id = $id Limit 1";
	  $result=$conn->query($sql);

	  if($id==1)
	  {
		echo "<script language='javascript'>alert('Este Usuario es Administrados intente 
		ingresar con otro Usuario')</script>";
		header("Refresh:0;url=/concesionario/perfil/admin/Usuarios/conf_users.php");
	  }else
	  {
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
			  $Nombre = $row['Nombre'];
			  $Apellido = $row['Apellido'];
			  $username = $row['Username_perfil'];
			  $email = $row['email'];
			  $perfil = $row['perfil'];
			  $fecha_ingreso = $row['fecha_ingre'];
			  
			}
		  } 
	  }

       
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/concesionario/css/style.css">
    <title>Update Usuarios</title>
</head>
<body>
<div class="container">
	<div class="row">
		<h2 class="text-danger">Actualizar Usuario</h2>
		<table class="table table-bordered success">
				<thead>
				<form action="/concesionario/perfil/admin/Usuarios/config/actualizacion/cambio.php" method="POST">
				<input type="hidden" class="form-control" enable="ok" id="cod" maxlenght="8" name="idusuario" value=<?php echo $id;?>>

					<tr >
						<th >Nombre</th>
						
						<td><input type="text" class="form-control" id="prod" name="Nombre" maxlenght="20" value=<?php echo $Nombre;?>></td>
					</tr>
					<tr>
						<th class="info">Apellido</th>
						<td><input type="text" class="form-control" id="prod" name="Apellido" maxlenght="20" value=<?php echo $Apellido;?>></td>
					</tr>
					<tr>
						<th class="info">Username</th>
						<td><input type="textr" class="form-control mb-2 mr-sm-2" id="cant" name="Username" value=<?php echo $username;?> required></td>
					</tr>
					<tr>
						<th class="info">Email</th>
						<td><input type="text" class="form-control mb-2 mr-sm-2" id="pcosto" name="email" autocomplete="off" value=<?php echo $email;?> required></td>
					</tr>
					
					<tr>
						<th class="info">Perfil</th>
						<td><input type="text" class="form-control mb-2 mr-sm-2" id="pcosto" name="perfil" autocomplete="off" value=<?php echo $perfil;?> required></td>
					</tr>
						
					<tr>
						<th class="info bg-primary">Register Date</th>
						<td><input type="text" class="form-control mb-2 mr-sm-2" id="pcosto" name="fecha" autocomplete="off" value=<?php echo $fecha_ingreso;?> required></td>
					</tr>
					<tr>	
					<tr >
						<th colspan="1"></th>
						<td>
							<a href="/concesionario/perfil/admin/Usuarios/config/conf_users.php" class="btn btn-warning">Back</a>
							<input type="submit" id="Actualizar" class="btn btn-info" name="Actualizar" value="Actualizar"></td>
						</form>
					</tr>
				</thead>

			</table>
	</div>
</div>
</body>
</html>