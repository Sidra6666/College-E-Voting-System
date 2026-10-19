<?php

$python=`python face_recognition.py`;

$myFile = "output.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, filesize($myFile));
fclose($fh);
echo $theData

?>