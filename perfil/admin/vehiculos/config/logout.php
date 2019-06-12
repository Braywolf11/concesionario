<?php
    session_start();
    session_destroy();
    echo "<script languaje='javascript'>alert('Adios')</script> ";
    header ("refresh:0; url=/concesionario/perfil/login.php");
?>