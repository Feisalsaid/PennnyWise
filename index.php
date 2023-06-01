<?php

session_start();

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Home</h1> 

    <?php if (isset($user)): ?>

        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        <div class="introduction">
            <h2>Welcome to Pennywise</h2>
            <p>Pennywise is a financial management platform designed to help you track your income, expenses, and budget effectively.</p>
            <p>With Pennywise, you can gain better control over your finances and make informed financial decisions.</p>





            <h2>Contact Us</h2>
            <p>Reach us out:
            </p>
            <p>0722157111/072272247
            </p>
        </div>

        <div class="button-container">
            <div class="btnlogo">
                <a href="income.html"><button>Income</button></a>
                <a href="expenses.html"><button>Expense</button></a>
                <a href="budget.html"><button>Budget</button></a>
                <a href=""><button>Behavioural Analysis</button></a>
            </div>
        </div>

        <p><a href="logout.php">Log out</a></p>

    <?php else: ?>

        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>

    <?php endif; ?>

</body>
</html>
