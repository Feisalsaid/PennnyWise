<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if (empty($_POST["amount"])) {
    die("amount is required");
}



$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO income (name, amount)
        VALUES (?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ss",
                  $_POST["name"],
                  $_POST["amount"],
                  );
                  
if ($stmt->execute()) {

    header("Location: incomesuccess.html");
    exit;
    
} 