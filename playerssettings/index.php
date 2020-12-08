<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dname=testDB",$username, $password);
    $sql = "CREATE DATABASE testDB2";
    $conn->exec($sql);
    echo "fewrfewr";
}
catch(PDOException $e) {
    echo $sql . $e->getMessage();
}
?>