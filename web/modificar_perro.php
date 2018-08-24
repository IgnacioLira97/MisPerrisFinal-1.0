<?php

include_once '../controlador/DaoPerro.php';
include_once '../modelo/Perro.php';

$id=$_POST["txtid"];
$nombre=$_POST["txtnombre"];
$raza=$_POST["txtraza"];
$peso=$_POST["txtpeso"];
$edad=$_POST["txtedad"];

$perro=new Perro();
$perro->setId($id);
$perro->setNombre($nombre);
$perro->setRaza($raza);
$perro->setPeso($peso);
$perro->setEdad($edad);

$dao=new DaoPerro();
$filas_afectadas=$dao->Modificar($perro);
if ($filas_afectadas>0) {
    echo 'El registro ha sido modificado.';
} else {
    echo 'El registro no se ha modificado.';
}