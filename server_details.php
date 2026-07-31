<?php
$hostName = htmlspecialchars($_SERVER['HTTP_HOST'] ?? $_SERVER['SERVER_NAME'] ?? 'Unknown', ENT_QUOTES, 'UTF-8');
$phpVersion = htmlspecialchars(PHP_VERSION, ENT_QUOTES, 'UTF-8');
$requestMethod = htmlspecialchars($_SERVER['REQUEST_METHOD'] ?? 'Unknown', ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Details</title>
</head>
<body>
    <h1>Server Details</h1>
    <p>Host name: <?= $hostName ?></p>
    <p>PHP version: <?= $phpVersion ?></p>
    <p>Request method used: <?= $requestMethod ?></p>
</body>
</html>
