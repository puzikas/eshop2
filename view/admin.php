<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<head>
	<title>E-SHOP/admin</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col"><h1>Elektroninė parduotuvė</h1></div>
			<div class="col-1"><a href="index.php">Main</a></div>
		</div>
		<br>
		<?= $alert ?>
		<div class="row">
			<div class="col-10">
				<h3>Prekių sarašas:</h3>
			</div>
			<div class="col-2">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_product">
					Pridėti naują prekę
				</button>
			</div>
			<!-- PRIDĖTI NAUJĄ PREKĘ -->
			<div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Pridėti naują prekę</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!-- MODAL -->
						<div class="modal-body">
							<form action="admin.php" method="post" enctype="multipart/form-data">
								<!-- PAVADINIMAS -->
								<label>Prekės pavadinimas</label>
								<input type="text" class="form-control" name="product">
								<br>
								<!-- APRAŠYMAS -->
								<label>Aprašymas</label>
								<textarea name="description" class="form-control"></textarea>
								<br>
								<!-- KAINA -->
								<label>Kaina</label>
								<input type="text" class="form-control" name="price">
								<br>
								<!-- NUOTRAUKA -->
								<label>Pridėti nuotrauką</label>
								<div class="input-group mb-3">
									<div class="custom-file">
										<input name="image" type="file" class="custom-file-input">
										<label class="custom-file-label">Pasirinkti failą</label>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Uždaryti</button>
								<button type="submit" name="submit" class="btn btn-primary">Pridėti prekę</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Pavadinimas</th>
						<th scope="col">Aprašymas</th>
						<th scope="col">Kaina</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $product) { ?>
					<tr>
						<td><?= $product['id'] ?></td>
						<td><?= $product['product'] ?></td>
						<td><?= $product['description'] ?></td>
						<td><?= $product['price'] ?></td>
						<td class="text-right">
							<a name="delete" class="btn btn-sm btn-danger" href="admin.php?delete=<?= $product['id'] ?>">Ištrinti</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>