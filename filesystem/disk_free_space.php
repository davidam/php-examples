<?php
// $df contains the number of bytes available on "/"
$df = disk_free_space("/");
print($df);
print("\n");
$ds = disk_total_space("/");
print($ds);
print("\n");
?>
