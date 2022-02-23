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
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
<div>
    <h1>Registration</h1>
</div>
<div class="login">
    <form method="post">
        <p class="p">Name:</p><br>
        <input type="text" name="name" placeholder="Name">
        <p class="p">Last name:</p><br>
        <input type="text" name="lastname" placeholder="Last name">
        <p class="p">Personal Code:</p><br>
        <input type="text" name="personalcode" placeholder="Personal Code">
        <br>
        <button type="submit" name="submit">Register</button>
    </form>
</div>
<p>Already registered? <a href="registration-table.php">Check here</a></p>
</body>
</html>
