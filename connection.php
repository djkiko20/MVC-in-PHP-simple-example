<?php

try {
    $host = "localhost";
    $dbname = "zadaca1_db";
    $username = "root";
    $password = "root";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}



?>