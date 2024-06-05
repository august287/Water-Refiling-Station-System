<?php
$serverName = "localhost";
$dBUserName = "root";
$dBPasswordname = "";
$dBName = "water_refilling_station";

$conn = mysqli_connect($serverName, $dBUserName, $dBPasswordname, $dBName);

if (!$conn){
    die("Connection failed". mysqli_connect_error());
}
?>