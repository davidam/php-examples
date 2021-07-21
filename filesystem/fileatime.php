<?php
$filename = 'somefile.txt';
if (file_exists($filename)) {
    echo "$filename was last accessed: " . date("F d Y H:i:s.", fileatime($filename));
    echo "\n";
} else {
    echo "file doesn't exist";
    echo "\n";
}
?>
