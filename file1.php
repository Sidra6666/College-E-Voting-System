


<?php

$File="/voter/splitb/".$_REQUEST['f'];

header("Content-Disposition: attachment; filename=\"" . basename($File) . "\"");
header("Content-Type: application/octet-stream");
header("Content-Length: " . filesize($File));
header("Connection: close");

?>