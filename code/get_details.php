<?php


$browser_name = $_POST["browserdata"];
$browser_width = $_POST["browser_width"];
$browser_height = $_POST["browser_height"];
$os_name = $_POST["os_name"];
$java_enable = $_POST["java_enable"];
$cookieEnabled = $_POST["cookieEnabled"];
$colorDepth = $_POST["colorDepth"];
$os_bit = $_POST["os_bit"];
$logicalProcessorCount = $_POST["logicalProcessorCount"];
$browser_language = $_POST["browser_language"];
$ip_address = $_SERVER['REMOTE_ADDR'];





echo $_POST["browserdata"];
echo "<br>";
echo $_POST["browser_width"];
echo "<br>";
echo $_POST["browser_height"];
echo "<br>";
echo $_POST["os_name"];
echo "<br>";
echo $_POST["browser_language"];
echo "<br>";
echo $_POST["java_enable"];
echo "<br>";
echo $_POST["cookieEnabled"];
echo "<br>";
echo $_POST["colorDepth"];
echo "<br>";
echo $_POST["os_bit"];
echo "<br>";
echo $_POST["logicalProcessorCount"];




?>

