<?php

require_once 'vendor/autoload.php';
use Doctrine\DBAL\DriverManager;

$connectionParams = [
    'dbname' => 'hospital',
    'user' => 'ieva',
    'password' => 'RobertsMika_112',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
];

$conn = DriverManager::getConnection($connectionParams);

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $personalCode = $_POST['personalcode'];

    $clients = ["name" => $name, "lastname" => $lastname, "personalcode" => $personalCode];

    $conn->insert('clients', $clients);
}

$users = $conn->fetchAllAssociative('SELECT * FROM clients');