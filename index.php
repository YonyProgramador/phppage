<?php
$dbHost = 'myidentifermsql.cud4yb1tz6cz.us-east-1.rds.amazonaws.com';
$dbName = 'myNewDatabase';
$dbUser = 'admin';
$dbPass = '12345678';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
}
?>
<html>
<head>
    <title>Base de Datos</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Base de Datos</h1>
        <ul>
            <li>
                <a href="list.php">Lista de Usuarios</a>
            </li>
            <li>
                <a href="add.php">Añadir Usuario</a>
            </li>
        </ul>
    </div>
</body>
</html>
