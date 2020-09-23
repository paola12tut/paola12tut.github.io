<?php
$operando1=$_GET['operando1'];
$operador=$_GET['operador'];

if($operador=="Gramos a kilogramos"){
    $solucion=$operando1/1000;
} else if($operador=="Metros a Kilómetros"){
    $solucion=$operando1/1000;
}else if($operador=="Metros a Centímetros"){
    $solucion=$operando1*100;
}else if($operador=="Kilogramos a Libras"){
    $solucion=$operando1*2.2046;
}
echo "<!DOCTYPE html>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Conversiones</title>
</head>
<body>";
if($operador=="Gramos a kilogramos"){
echo"<h1>Kilogramos: ".$solucion."</h1>";
}else if($operador=="Metros a Kilómetros"){
    echo"<h1>Kilómetros: ".$solucion."</h1>";
}else if($operador=="Metros a Centímetros"){
    echo"<h1>Centímetros: ".$solucion."</h1>";
}else if($operador=="Kilogramos a Libras"){
    echo"<h1>Libras: ".$solucion."</h1>";
}
"</body>";
?>
