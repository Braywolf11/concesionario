<?php
    include("database.php");
    $id = $_POST['idusuario'];
    $Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$username = $_POST['Username'];
	$email = $_POST['email'];
	$perfil = $_POST['perfil'];
    $fecha_ingreso = $_POST['fecha'];

   
        $sql="UPDATE users SET Nombre = '$Nombre', Apellido = '$Apellido', Username_perfil = '$username', email = '$email', perfil = '$perfil'
         WHERE id = '$id' ";
        $conn->query($sql);
    
   
	echo "<script language='javascript'>alert('Archivo actualizado con exito')</script>";
    header("Refresh:0;url=/concesionario/perfil/admin/Usuarios/conf_users.php");
    
    
    


?>