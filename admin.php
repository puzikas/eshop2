<?php

require 'config.php';

try {
    $conn = new PDO("mysql:host=$domain;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    $alert = null;

if (isset($_POST['submit'])) {

	if (isset($_POST['product']) && !empty($_POST['product'])) {
		
		if (isset($_POST['price']) && !empty($_POST['price'])) {

			$alert = '<div class="alert alert-warning" role="alert">
		Prekė sekmingai pridėta!</div>';


		$target_dir = "images/";
		$target_file = $target_dir . time() ."_". $_FILES['image']['name'];

		move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


		$query = $conn->prepare("INSERT INTO products (product, description, price, image) VALUES (:product, :description, :price, :image)");
			
		$query->execute([
        'product' => $_POST['product'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'image' => $target_file
    ]);
			

		} else {

			$alert = '<div class="alert alert-warning" role="alert">
			Įveskite prekės kainą!</div>';
		}
	} else {

		$alert = '<div class="alert alert-warning" role="alert">
		Įveskite prekės pavadinimą!</div>';
	}
}



if (isset($_GET['delete']) && !empty($_GET['delete']) ) {
    $query = $conn->prepare("DELETE FROM products WHERE id = :id");
    $query->execute([
        'id' => $_GET['delete']
    ]);
}

// $target_dir = "images/";
// $target_file = $target_dirt . time() . $_FILES(['image']['name']);










$stmt = $conn->query("SELECT id, product, description, price, image FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

require 'view/admin.php';

