
<?php
	include "database.php";
    $id =$_GET['id'];
    $sql="SELECT * FROM vehiculos WHERE id = $id Limit 1";
	  $result=$conn->query($sql);

      if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
          $marca = $row['marca'];
          $nomcar = $row['Nombre'];
          $modelo = $row['modelo'];
		  $color = $row['color'];
		  $precio = $row['precio'];
		  $ruta_foto = $row['photo'];
		  $estado = $row['estado'];
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
    <title>update</title>
</head>
<body>
<div class="container">
	<div class="row">
		<h2 class="text-danger">Aprovar vehiculo</h2>
		<table class="table table-bordered success">
				<thead>
				<form action="/concesionario/perfil/admin/vehiculos/config/actualizacion/cambio.php" method="POST">
				<input type="hidden" class="form-control" enable="ok" id="cod" maxlenght="8" name="idvehiculo" value=<?php echo $id;?>>

					<tr >
						<th >Marca</th>
						
						<td><select id="marca" name="marca" class="form-control" readonly="yes">
							<option value="<?php echo $marca;?>"><?php echo $marca;?></option>
							<option value="BMW"><b>BMW</b></option>
							<option value="Audi"><b>Audi</b></option>
							<option value="Chevrolet"><b>Chevrolet</b></option>
							<option value="Dodge"><b>Dodge</b></option>
							<option value="Ford"><b>Ford</b></option>
							<option value="Jeep"><b>Jeep</b></option>
							<option value="Mercedes-Benz"><b>Mercedes-Benz</b></option>
							<option value="Mitsubishi"><b>Mitsubishi</b></option>
							<option value="Porsche"><b>Porsche</b></option>
							<option value="Volkswagen"><b>Volkswagen</b></option>
							<option value="Toyota"><b>Toyota</b></option>
							<option value="Subaru"><b>Subaru</b></option>
							<option value="Lamborghini"><b>Lamborghini</b></option>
							<option value="Ferrari"><b>Ferrari</b></option>
						</select></td>
					</tr>
					<tr>
						<th class="info">Nombre</th>
						<td><input type="text" class="form-control" id="prod" name="Nombre" maxlenght="20" value=<?php echo $nomcar;?>></td>
					</tr>
					<tr>
						<th class="info">Modelo</th>
						<td><input type="textr" class="form-control mb-2 mr-sm-2" id="cant" name="Modelo" value=<?php echo $modelo;?> required></td>
					</tr>
					<tr>
						<th class="info">Color</th>
						<td><input type="text" class="form-control mb-2 mr-sm-2" id="pcosto" name="color" autocomplete="off" value=<?php echo $color;?> required></td>
					</tr>
					
					<tr>
						<th class="info">Precio</th>
						<td><input type="text" class="form-control mb-2 mr-sm-2" id="pcosto" name="precio" autocomplete="off" value=<?php echo $precio;?> required></td>
					</tr>
					<tr>
						<th class="info">Ruta Foto</th>
						
						<td><input type="file" class="form-control" id="foto" name="foto" value="Examinar" ></td>
					</tr>
								
					<tr>
						<th class="info">Status</th>
						<td><b><input type="text" class="form-control mb-2 mr-sm-2" id="pcosto" name="estado" autocomplete="off" value=<?php echo $estado;?> readonly="yes"></b></td>
						
					</tr>
				
					<tr>
						<th class="info bg-info">Approval Date</th>
						<td class="bg-primary">14/12/2018</td>
					</tr>
					<tr>
						<th class="info bg-primary">Register Date</th>
						<td class="bg-info">10/12/2018 12:00:45</td>
					</tr>
					<tr>
							
						
							
						<th class="info">Action</th>
						<td><select id="approv_status" name="approv_status" class="form-control">
							<option value="">Select</option>
							<option value="active"><b>Active</b></option>
							<option value="inactive"><b>Inactive</b></option>
						</select></td>
						
					</tr>
					<tr >
						<th colspan="1"></th>
						<td>
							<a href="/concesionario/perfil/admin/vehiculos/conf_vehiculo.php" class="btn btn-warning">Back</a>
							<input type="submit" id="approve_btn" class="btn btn-info" name="approve_btn" value="Approve"></td>
						</form>
					</tr>
				</thead>

			</table>
	</div>
</div>
</body>
</html>