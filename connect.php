<?php
$server = "localhost";

$username = "root";

$password = "";

$dbname = "vedam_user";

// $con = mysqli_connect($server, $username, $password);
$con = new mysqli($server, $username, $password, $dbname);

if (!$con) {
    echo "Fail to connecting to the db";
    // die("Connection failed: " . $con->connect_error);
} else {
    // echo "Success";
}