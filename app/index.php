<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тестовая страница</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>


<body>
<table>
<?php
$dbh = null;

try {
    $dbh = new PDO(
        "mysql:host=mysql;dbname=test",
        "ezh1k",
        "alastor_cool",
        [PDO::ATTR_PERSISTENT => true]
    );

    $stmt = $dbh->query("SELECT * FROM `test`.`User`");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


    foreach ($rows as $row) {
       /* echo "<div>{$row['user_id']}: {$row['surname']}</div>";*/
        echo "<tr><td>{$row['user_id']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>";
    }

}

catch (PDOException $e) {
    echo "<div>{$e->getMessage()}</div>";
    die();
}
?>
</table>

<?php phpinfo(); ?>
</body>

</html>
