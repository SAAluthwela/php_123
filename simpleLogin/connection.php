<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sample_login";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die("failed to connect db");
}
