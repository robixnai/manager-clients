<?php
include_once('database.php');
include_once('model/client-model.php');

$sql = "SELECT id, code, name, last_name, age FROM client";
$result = $conn->query($sql);

$clients = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $client = new ClientModel($row["id"], $row["code"], $row["name"], $row["last_name"], $row["age"]);
        array_push($clients, $client);
    }
}

$conn->close();
