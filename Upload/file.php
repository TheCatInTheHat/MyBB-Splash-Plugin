<!DOCTYPE html>
<html>

<body>
<style type="text/css">
  p {
    	color:#FFFF00;
	font-size:2em;
	text-shadow: 2px 2px black;
	text-align:center;
     }
  </style>
<p>
<?php
$file = fopen("p0.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
$filename = "p0.txt";
$lines = file($filename);
$numLines = count($lines) -1;
$ranNum = rand(0, $numLines);
echo $lines[$ranNum];
fclose($file);
?>
</p>
</body>
</html>