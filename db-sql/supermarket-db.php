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

	$sql="SELECT * FROM Items ORDER BY Price DESC";
	echo "<ul>";

	// Commented out code. Will add items to the DB every time the page refreshes if uncommented

	// try {
	// 	$itemsToAdd = array(
	// 		array("Milk", 3.56),
	// 		array("Toothbrush", 12.00),
	// 		array("Cerial", 6.49),
	// 		array("Yoghurt", 5.49)
	// 	);

	// 	$itemStatement = $conn -> prepare("INSERT INTO Items(Name, Price) VALUES(?, ?)");

	// 	foreach ($itemsToAdd as $item) {
	// 		$itemStatement -> execute($item);
	// 	}

	// 	$qtyToAdd = array(
	// 		array(25, 20),
	// 		array(12, 5),
	// 		array(30, 10),
	// 		array(6, 5)
	// 	);

	// 	$qtyStatement = $conn -> prepare("INSERT INTO Stock(Quantity, Reorder_Level) VALUES(?, ?)");

	// 	foreach ($qtyToAdd as $qty) {
	// 		$qtyStatement -> execute($qty);
	// 	}

	// } catch (PDOException $e) {
	// 	echo "Query failed: " . $e -> getMessage();
	// }

	try {
		$rows = $conn -> query($sql);

		foreach ($rows as $row) {
			echo "<li>" . "ID: " . $row["ID"] . ", " . $row["Name"] . " costs $" . $row["Price"] . "</li>";
		}
	} catch (PDOException $e) {
		echo "Query failed: " . $e -> getMessage();
	}

	echo "</ul>";
	$conn = null;
?>