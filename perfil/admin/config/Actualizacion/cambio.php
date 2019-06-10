<?php
    include("database.php");
    $id = $_POST['idvehiculo'];
    $Marca = $_POST['marca'];
    $Nombre = $_POST['Nombre'];
    $Modelo = $_POST['Modelo'];
    $Color = $_POST['color'];
    $Precio = $_POST['precio'];
    $estado = $_POST['estado'];
    $cambio = $_POST['approv_status'];

    
    
    
   //Get file name
	$name = $_FILES['foto']['name'];
	//Get extension type name
	$type = $_FILES['foto']['type'];
	//Get file size
	$size = $_FILES['foto']['size'];
	//Get temp_file folder
	$tmp_folder = $_FILES['foto']['tmp_name'];
	
	//echo $name."<br>".$type."<br>".$size."<br>".$tmp_folder;
	
	//Upload file
	move_uploaded_file($_FILES['foto']['tmp_name'],"/concesionario/vehiculos/".$_FILES['foto']['name']);
	
	$ruta = "/concesionario/vehiculos/".$name;
	
	$sql="UPDATE vehiculos SET marca = '$Marca', Nombre = '$Nombre', modelo = '$Modelo', color = '$Color'
    , precio = '$Precio', photo = '$ruta' WHERE id = '$id' ";
    $conn->query($sql);
    
    if($cambio=="active")
    {
        if ($estado==1) {
            
        } else {
            $sql="UPDATE vehiculos SET estado = '1' WHERE id = '$id' ";
            $conn->query($sql);
        }
    }else {
        if ($estado==1) {
            $sql="UPDATE vehiculos SET estado = '0' WHERE id = '$id' ";
            $conn->query($sql);
        } else {
            
        }
    }
	
	/*
	echo "<script language='javascript'>alert('Archivo actualizado con exito')</script>";
    header("Refresh:0;url=index.php");
    */
    
    


?>