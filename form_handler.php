
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
</head>
<body>

<?php
$name = htmlspecialchars($_REQUEST['name'] );
$email = htmlspecialchars($_REQUEST['email'] );
$message = htmlspecialchars($_REQUEST['message']);
?>
    <p>Name: <?= $name ?>, 
    Email: <?= $email ?>, 
    Message: <?= $message ?></p>
 
</body>
</html>
