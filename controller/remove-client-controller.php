<?php
include_once('../database.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = htmlspecialchars($_GET['id']);
    
    if (empty($id)) {
        echo "ID is required<br>";
        return;
    }

    $sql = "DELETE FROM client WHERE id = " .$id;
    if ($conn->query($sql) === TRUE) {
        header("location: ../index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
