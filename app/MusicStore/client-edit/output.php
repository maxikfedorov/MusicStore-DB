<?php
try {

    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );

    include_once('input.php');

    $sth = $dbh->prepare("SELECT * FROM `clients`");

    $sth->execute();

    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    echo "<tr><td>ID</td><td>Adress</td><td>Phone</td><td>Surname</td><tr>";
    foreach ($array as $row) {
        echo "<tr>
                <td>{$row['client_id']}</td>
                <td>{$row['client_adress']}</td>
                <td>{$row['client_phone']}</td>
                <td>{$row['client_surname']}</td>
              </tr>";
    }
}
catch (PDOException $e) {
    echo "<div>{$e->getMessage()}</div>";
    die();
}
?>


