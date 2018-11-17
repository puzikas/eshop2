


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<head>
	<title>E-SHOP</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col"><h1>Elektroninė parduotuvė</h1></div>
			<div class="col-1"><a href="admin.php">Admin</a></div>
		</div>
		<br>
		<div class="row">
			<div class="col-10">
				<h3>Prekių sarašas:</h3>
			</div>
		</div>
		<div class="row">
			

<?php foreach($products as $product) { ?>
			<div class="card" style="width: 16rem; margin: 6px;">
			<img alt="<?= $product['product'] ?>" height="180" src="<?= $product['image'] ?>">
				<div class="card-body">
					<h5 class="card-title"><?= $product['product']?></h5>
					<p class="card-text"><?= $product['description']?></p>
				</div>
				<ul style="text-align: center;" class="list-group list-group-flush">
					<li class="list-group-item">Kaina: <?= $product['price'] ?></li>
				</ul>
				<div style="text-align: center;" class="card-body">
					<a  href="#" class="card-link">Pridėti į krepšelį</a>
				</div>
			</div>
<?php } ?>

		</div>

	</body>
	</html>