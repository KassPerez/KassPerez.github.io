<?php

include "db.php";

function getData($table) {
	$conn = createConnection();
	$query = "SELECT * FROM $table";
	$dbData = $conn->query($query);
	$data = array();
	while ($row = $dbData->fetch_assoc()) {
		array_push($data, $row);
	}
	closeConnection($conn);
	return $data;
}

function getDistData() {
	$data = getData("distData");
	return $data;
}

function getAssetData() {
	$data = getData("assetData");
	return $data;
}

function getLocationData() {
	$data = getData("locationData");
	return $data;
}

function test() {
	$data = getLocationData();
	foreach ($data as $row) {
		foreach ($row as $ele) {
			print("$ele ");

		}
		print("\n");
	}
}


?>
