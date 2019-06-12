<?php
    include('database.php');

    $id=$_GET['id'];
    
    
    $sql = "DELETE FROM users WHERE id=$id";

    $conn ->query($sql);
    echo "<script languaje='javascript'>alert('Producto eliminado')
    </script>";

    header("refresh:0; url=/concesionario/perfil/admin/usuarios/config/conf_usuario.php");

    

?>