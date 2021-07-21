<?php
$path = "lala.txt";
print("with basename... \n");
print(basename($path). "\n");
print("file exists ...\n");
print(file_exists($path)."\n");

$myfile = fopen($path, "r") or die("Unable to open file!");
echo "fread ... \n";
echo fread($myfile, filesize($path));
echo "fgets ... \n";
echo fgets($myfile);
echo "if not eof...\n";
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
  echo fgetc($myfile);
}
fclose($myfile);

if (file_exists($path)) {
  echo "Sorry, file already exists.";
}



?>
