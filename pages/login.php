<?php

include '../config/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/cvsu.png" type="image/x-icon">
    <title>Login - Campus Property Custodian Inventory System</title>
</head>
<body>

    <div>
        <form action="login.php">
            <label for="employeeID">Employee ID:</label><br>
            <input type="text" id="employeeID" name="employeeID"><br>
            <label for="employeePassword">Password:</label><br>
            <input type="text" id="employeePassword" name="employeePassword"><br>
            <input type="submit" value="Submit">
        </form>

    </div>
    
</body>
</html>