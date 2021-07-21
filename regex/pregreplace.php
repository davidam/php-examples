
<?php
$cadena = 'Abril 15, 2003';
$patrón = '/(\w+) (\d+), (\d+)/i';
$sustitución = '${1}1,$3';
echo preg_replace($patrón, $sustitución, $cadena);
echo "\n";

$cadena = 'El veloz murciélago hindú comía feliz cardillo y kiwi.';
$patrones = array();
$patrones[0] = '/veloz/';
$patrones[1] = '/hindú/';
$patrones[2] = '/murciélago/';
$sustituciones = array();
$sustituciones[2] = 'galápago';
$sustituciones[1] = 'africano';
$sustituciones[0] = 'lento';
echo preg_replace($patrones, $sustituciones, $cadena);
echo "\n";
?>
