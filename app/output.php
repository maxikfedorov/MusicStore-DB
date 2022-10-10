<?php
try {

    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );

    include_once('input.php');

    $sth = $dbh->prepare("SELECT * FROM `item_class`");

    $sth->execute();

    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    echo "<tr><td>ID</td><td>Class</td><tr>";
    foreach ($array as $row) {
        echo "<tr><td>{$row['class_id']}</td><td>{$row['class_descr']}</td></tr>";
    }
}
catch (PDOException $e) {
    echo "<div>{$e->getMessage()}</div>";
    die();
}
?>


