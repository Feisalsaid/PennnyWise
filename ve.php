<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="vi.css">
    <title>View</title>
</head>
<body>
    




<?php


$mysqli = new mysqli('localhost', 'root', "", 'login_db');

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Fetch incomes from the "income" table
$sql = "SELECT name, amount FROM expense";
$result = $mysqli->query($sql);

// Store the fetched incomes in an array
$incomes = array();
while ($row = $result->fetch_assoc()) {
    $expenses[] = $row;
}

// Close the database connection
$mysqli->close();

// Display the fetched incomes
echo "<h2>My Expenses:</h2>";
echo "<ul>";



foreach ($expenses as $expense) {
    echo "<li>{$expense['name']}: {$expense['amount']}</li>";
}
echo "</ul>";
?>
<a href="index.php"> <i> Home</i></a>
</body>
</html>