<?php
$myfile = fopen("newfile.txt", "w","R") or die("Unable to open file!");
$txt = "Hi, I am Ayaan Hyder,Roll NO:A017 from batch b1 and currently pursuing Mca from MPSTME. \n";
fwrite($myfile, $txt);
fclose($myfile);
?>