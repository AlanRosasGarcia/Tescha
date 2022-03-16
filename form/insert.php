<?php

include('conect.php');

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $apellido = $_POST['apellido_p'];
    $apellido_m = $_POST['apellido_m'];
    $edad = $_POST['edad'];
    $contraseña = $_POST['contraseña'];
//     $name = trim($_POST['name']);
//     $name = trim($_POST['name']);
//     $name = trim($_POST['name']);
//     $name = trim($_POST['name']);
    $consultas="INSERT INTO form( nombre, apellido_p, apellido_m, edad,/* sexo,*/ contrasena) VALUES ('$name'.'$apellido'.'$apellido_m'.'$edad'.$contraseña)";
    $resultado = mysqli_query($conex,$consultas);
}
else{
    echo("Eror");
}