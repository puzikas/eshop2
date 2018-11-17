<?php

require 'config.php';

try {
    $conn = new PDO("mysql:host=$domain;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<pre><b>Connection failed: </b>" . $e->getMessage();
    echo "<br>Please check the database settings in <b>config.php</b> and reload this page.</pre>";
    die();
}


$stmt = $conn->query("SELECT id, product, description, price FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);





require 'view/index.php';