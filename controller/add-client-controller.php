<?php
include_once('../database.php');
include_once('../model/client-model.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = htmlspecialchars($_POST['code']);
    $name = htmlspecialchars($_POST['name']);
    $last_name = htmlspecialchars($_POST['lastName']);
    $age = htmlspecialchars($_POST['age']);

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

    if ($code_required || $name_required || $last_name_required || $age_required) {
        return;
    } else {
        $sql = "INSERT INTO client (code, name, last_name, age) 
        VALUES('" . $code . "', '" . $name . "', '" . $last_name . "', " . $age . ")";

        if ($conn->query($sql) === TRUE) {
            header("location: ../index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
