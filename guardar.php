<?php
include 'config.php';
$sexo=$_POST['cbosexo'];
$edad=$_POST['edades'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$tipos_robos=$_POST['cbrobos'];
$descripcion=$_POST['descripcion'];
$pdenuncio=$_POST['policia'];
$presuelto=$_POST['resuelto'];
$distrito=$_POST['distritos'];
$barrios=$_POST['barrio'];
echo $sexo;
echo $edad;
echo $fecha;
echo $hora;
echo $tipos_robos;
echo $descripcion;
echo $pdenuncio;
echo $presuelto;
$sql=mysql_query("INSERT INTO `denucias`( `sexo`, `edad`,`hora`,`fecha`, `distrito`, `barrio`, `tipo`, `descripcion`, `denuncia`, `solucion`) VALUES ('$sexo','$edad','$hora','$fecha','$distrito','$barrios','$tipos_robos','$descripcion','$pdenuncio','$presuelto')");

header("location:index.php");


?>
