<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ptdb";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Conexiune esuata: ". mysqli_connect_error());
}