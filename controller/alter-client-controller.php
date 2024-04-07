<?php
include_once('../database.php');
include_once('../model/client-model.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = htmlspecialchars($_GET['id']);

    if (empty($id)) {
        echo "ID is required<br>";
        return;
    }

    $sql = "SELECT id, code, name, last_name, age FROM client WHERE id = " .$id;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $client = new ClientModel($row["id"], $row["code"], $row["name"], $row["last_name"], $row["age"]);
        }
    }

    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = htmlspecialchars($_POST['id']);
    $code = htmlspecialchars($_POST['code']);
    $name = htmlspecialchars($_POST['name']);
    $last_name = htmlspecialchars($_POST['lastName']);
    $age = htmlspecialchars($_POST['age']);

    $id_required = false;
    if (empty($id)) {
        $id_required = true;
        echo "ID is required<br>";
    }

    $code_required = false;
    if (empty($code)) {
        $code_required = true;
        echo "Code is required<br>";
    }

    $name_required = false;
    if (empty($name)) {
        $name_required = true;
        echo "Name is required<br>";
    }

    $last_name_required = false;
    if (empty($last_name)) {
        $last_name_required = true;
        echo "Last Name is required<br>";
    }

    $age_required = false;
    if (empty($age)) {
        $age_required = true;
        echo "Age is required<br>";
    }

    if ($id_required || $code_required || $name_required || $last_name_required || $age_required) {
        return;
    } else {
        $sql = "UPDATE client 
        SET code = '" .$code. "', name = '" .$name. "', last_name = '" .$last_name. "', age = " .$age. "
        WHERE id = " .$id;

        echo $sql;

        if ($conn->query($sql) === TRUE) {
            header("location: ../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
