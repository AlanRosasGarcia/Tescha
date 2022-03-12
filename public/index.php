<?php
// centralizando las peticiones 
require __DIR__ . '../vendor/autoload.php';//requiriendo el autoload
//__DIR__ es para crear rutas absolutas 
$recuest = new App\Http\Recuest;//creando un objeto recuest 

$recuest->send(); 