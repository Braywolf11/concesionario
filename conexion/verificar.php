<?php

    include("database.php");

//Validar usuario y contraseña
$email = $_POST["user"];
$pass = $_POST["pass"];
 
$conexion=mysqli_connect($servername,$username,$password,$dbname);
$sql = "SELECT * FROM users WHERE email = '$email' AND password='$pass'";
$result = $conn->query($sql);

 if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
    if ($row['perfil']==1){
        session_start();
        $_SESSION['users']=$row['Username_perfil'];        
        echo "<script languaje='javascript'>alert('Bienvenido Administrador')</script> ";
        header ("refresh:0; url=/concesionario/perfil/admin/admin.php");
    }elseif ($row['perfil']==2) {
        session_start();
        $_SESSION['users']=$row['Username_perfil'];
        echo "<script languaje='javascript'>alert('Bienvenido Usuario')</script> ";
        header ("refresh:0; url=/concesionario/perfil/admin/usuarios.php");
    }elseif ($row['perfil']==3) {
        session_start();
        $_SESSION['users']=$row['Username_perfil'];
        echo "<script languaje='javascript'>alert('Bienvenido Cliente')</script> ";
        header ("refresh:0; url=/concesionario/perfil/admin/uientes.php");
    }else {
        echo "<script languaje='javascript'>alert('Lo sentimos perfil no establesido por favor actualice su informacion y escoja perfil correcto')</script> ";
        header ("refresh:0; url=/concesionario/perfil/admin/update.php");
    }
    }
 }else {
    echo "<script languaje='javascript'>alert('Datos Incorrectos')</script> ";
    header ("refresh:0; url=/concesionario/perfil/admin/admin2.php");
 }


?>