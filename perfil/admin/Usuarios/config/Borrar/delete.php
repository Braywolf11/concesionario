<?php
    include('database.php');

    $id=$_GET['id'];
    
    
    $sql = "DELETE FROM vehiculos WHERE id=$id";

    $conn ->query($sql);
    echo "<script languaje='javascript'>alert('Producto eliminado')
    </script>";

    header("refresh:0; url=/concesionario/perfil/admin/config/conf_vehiculo.php");

    

?>