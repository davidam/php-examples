<?php
$sujeto = "abcdef";
$patrón = '/^def/';
preg_match($patrón, $sujeto, $coincidencias, PREG_OFFSET_CAPTURE, 3);
print_r($coincidencias);

$sujeto = "abcdef";
$patrón = '/^def/';
preg_match($patrón, substr($sujeto,3), $coincidencias, PREG_OFFSET_CAPTURE);
print_r($coincidencias);

preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
print_r($matches);

if (preg_match("/php/i", "PHP es el lenguaje de secuencias de comandos web preferido.")) {
    echo "Se encontró una coincidencia.\n";
} else {
    echo "No se encontró ninguna coincidencia.\n";
}

if (preg_match("/\bweb\b/i", "PHP es el lenguaje de secuencias de comandos web preferido.")) {
    echo "Se encontró una coincidencia.\n";
} else {
    echo "No se encontró ninguna coincidencia.\n";
}


preg_match('@^(?:http://)?([^/]+)@i', "http://www.php.net/index.html", $coincidencias);
$host = $coincidencias[1];

// obtiene los dos últimos segmentos del nombre del host
preg_match('/[^.]+\.[^.]+$/', $host, $coincidencias);
echo "El nombre de dominio es: {$coincidencias[0]}\n";


?>
