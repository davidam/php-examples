
<?php
// chmod("shared_file.txt", 755);   // decimal; probably incorrect
// chmod("shared_file.txt", "u+rwx,go+rx"); // string; incorrect
chmod("shared_file.txt", 0755);  // octal; correct value of mode

// Read and write for owner, nothing for everybody else
chmod("shared_file.txt", 0600);

// Read and write for owner, read for everybody else
chmod("shared_file.txt", 0644);

// Everything for owner, read and execute for others
chmod("shared_file.txt", 0755);

// Everything for owner, read and execute for owner's group
chmod("shared_file.txt", 0750);
?>
