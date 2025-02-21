<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "renew";
$conn = "";

try{
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // echo "connection established";
}
catch(mysqli_sql_exception){
    echo "Connection not established";
}




?>