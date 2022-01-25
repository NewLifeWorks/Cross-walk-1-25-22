<?php
ob_start(); //This turns on output buffering

$timezone = date_default_timezone_set("America/Chicago");
session_start();

$con = mysqli_connect("localhost", "root", "", "cross walk"); //Connection varible

if (mysqli_connect_errno()) {
    echo "Could not connect: " . mysqli_connect_errno();
}
?>
