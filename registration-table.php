<?php
session_start();

require_once 'db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="t">
<table>
    <thead>
    <th>Name</th>
    <th>Lastname</th>
    <th>Personal Code</th>
    </thead>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['name'] . "<br>"; ?></td>
            <td><?= $user['lastname'] . "<br>"; ?></td>
            <td><?= $user['personalcode'] . "<br>"; ?></td>
        </tr>
    <?php endforeach;?>
</table>
</div>
    <p>Not Registered? <a href="index.php">Register here</a></p>
</body>
</html>
