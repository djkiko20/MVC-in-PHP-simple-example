<?php

try {
    $host = "localhost";
    $dbname = "example_db";
    $username = "user";
    $password = "pass";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}



?>
