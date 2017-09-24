<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
include_once './config.php';

$pdo = new PDO(DBDNS, DBUSER, DBPASS);            
$stmt = $pdo->prepare("INSERT INTO MY_TEST (key, data) VALUES (?, ?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $value);

// вставим одну строку
$name = 'one';
$value = 1;
$stmt->execute();

// теперь другую строку с другими значениями
$name = 'two';
$value = 2;
$stmt->execute();
        ?>
    </body>
</html>
