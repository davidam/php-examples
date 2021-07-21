
<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<peliculas>
 <pelicula>
  <titulo>PHP: Tras el Analilzador</titulo>
  <personajes>
   <personaje>
    <nombre>Srta. Programadora</nombre>
    <actor>Onlivia Actora</actor>
   </personaje>
   <personaje>
    <nombre>Sr. Programador</nombre>
    <actor>El Act&#211;r</actor>
   </personaje>
  </personajes>
  <argumento>
   Así que, este lenguaje. Es como, un lenguaje de programación. ¿O es un
   lenguaje de script? Lo descubrirás en esta intrigante y temible parodia
   de un documental.
  </argumento>
  <grandes-frases>
   <frase>PHP soluciona todos los problemas web</frase>
  </grandes-frases>
  <puntuacion tipo="votos">7</puntuacion>
  <puntuacion tipo="estrellas">5</puntuacion>
 </pelicula>
</peliculas>
XML;

$peliculas = new SimpleXMLElement($xmlstr);
echo "\n";
echo $peliculas->pelicula[0]->argumento;
echo "\n";
echo $peliculas->pelicula->{'grandes-frases'}->frase;
echo "\n";

foreach ($peliculas->pelicula->personajes->personaje as $personaje) {
   echo $personaje->nombre, ' interpretado por ', $personaje->actor, PHP_EOL;
}

$peliculas = new SimpleXMLElement($xmlstr);

echo "\n";
/* Acceder a los nodos <puntuacion> de la primera película.
 * Mostrar la escala de puntuación también. */
foreach ($peliculas->pelicula[0]->puntuacion as $puntuacion) {
    switch((string) $puntuacion['tipo']) { // Obtener los atributos como índices del elemento
    case 'votos':
        echo $puntuacion, ' votos positivos';
        break;
    case 'estrellas':
        echo $puntuacion, ' estrellas';
        break;
    }
}
echo "\n";

?>
