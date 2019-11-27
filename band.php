<?php
echo "Het albumoverzicht:" . PHP_EOL;
$data = array("Citizen of Glass"=>4.5, "Night "=>9, "New Eyes"=>5, "Strange Trails"=>10);
$getal = 0;

foreach ($data as $key => $value) {
  echo $key . " kost €" . $value . PHP_EOL;
  $resultaat = $getal += $value;
}
echo"Het totaalbedrag van alle albums is ";
echo $resultaat . PHP_EOL;
echo "De gemiddelde prijs van alle albums is " . $resultaat /= 4;
 ?>
