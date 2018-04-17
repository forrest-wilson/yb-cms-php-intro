<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Inserting SQL Data</title>

	<link rel="stylesheet" href="../node_modules/bulma/css/bulma.css">
</head>
<body class="container">
	<div class="columns">
		<form class="column" action="insert.php" method="POST">
			<div class="field">
				<label class="label">Item Name</label>
				<div class="control">
					<input class="input" name="name" type="text" placeholder="Item Name" required>
				</div>
			</div>

			<div class="field">
				<label class="label">Item Price</label>
				<div class="control">
					<input class="input" name="price" type="text" placeholder="Item Price" required>
				</div>
			</div>
			
			<div class="field">
				<label class="label">Stock</label>
				<div class="control">
					<input class="input" name="stock" type="text" placeholder="Stock Level" required>
				</div>
			</div>
			
			<div class="field">
				<label class="label">Reorder Level</label>
				<div class="control">
					<input class="input" name="reorder" type="text" placeholder="Reorder Level" required>
				</div>
			</div>

			<input type="submit" class="button is-success" value="Submit">
		</form>

		<form class="column" action="remove.php" method="POST">
			<div class="field">
				<label class="label">ID to Remove</label>
				<div class="control">
					<input class="input" name="id" type="text" placeholder="Item Name">
				</div>
			</div>

			<input type="submit" class="button is-danger" value="Remove">
		</form>
	</div>

	<div class="content">
		<?php
			$dsn="mysql:dbname=Supermarket";
			$username="root";
			$password="root";

			try {
				$conn = new PDO($dsn,$username,$password);
				$conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo "connection failed:" . $e -> getMessage();
			}

			$sql="SELECT Items.ID, Items.Name, Items.Price, Stock.Date, Stock.Quantity FROM Items, Stock WHERE Items.ID = Stock.ID";
			echo "<ul>";

			try {
				$rows = $conn -> query($sql);

				foreach ($rows as $row) {
					echo "<li>" . "ID: " . $row["ID"] . ", " . $row["Name"] . " costs $" . $row["Price"] . ", Stock Level: " . $row["Quantity"] . ". Date: " . $row["Date"] . "</li>";
					
					if ($row["Price"] < 5) {
					    echo $row["Name"] . " is on sale!";
					}
				}
				
			} catch (PDOException $e) {
				echo "Query failed: " . $e -> getMessage();
			}

			echo "</ul>";
			$conn = null;
		?>
	</div>
</body>
</html>