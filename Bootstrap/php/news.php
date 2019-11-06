<?php

if ($f1 = fopen('sources/newsHeadline.txt', 'r')) {
$i = 0;
while (!feof($f1)) {
$lineHeader = fgets($f1);
echo "<div class=\"row\"> <div class=\"col newsHeadline\">" . strtoupper($lineHeader) . "</div> </div>";

$contentRead = "sources/newsContent.txt";
$lineContent = file($contentRead);
echo "<div class=\"row\"> <div class=\"col newsContent\">" . $lineContent[$i] . "</div> </div>";

$i == $i++;
}
fclose($f1);
}

?>