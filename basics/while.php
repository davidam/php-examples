
<?php
/* ejemplo 1 */

echo "ejemplo 1\n";
echo "\n";
$i = 1;
while ($i <= 10) {
    echo $i++;  /* el valor presentado sería
                   $i antes del incremento
                   (post-incremento) */
    echo "\n";    
}
echo "\n";
echo "ejemplo 2\n";    
echo "\n";
/* ejemplo 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    echo "\n";
    $i++;
endwhile;
?>
