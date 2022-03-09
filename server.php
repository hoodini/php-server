<?php
header ('Location:https://www.ynet.co.il/entertainment/article/s1owkck2t');
$geolocation = $_GET["g"];
echo "<h1>Weclome</h1>";
echo "<h2>";
echo $geolocation;
echo "</h2>";
$file = fopen('log.txt', 'a');
fwrite($file, $geolocation . "\n\n");
?>
