<?php
$serverName = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname = "university";

$conn = mysqli_connect($serverName, $DBusername, $DBpassword, $DBname);

if(!$conn)
{
    die("connection failed: " . mysqli_connect_error());
}
