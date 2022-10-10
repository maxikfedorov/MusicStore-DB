<?php
try {

    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );

    include_once('input.php');

    $sth = $dbh->prepare("SELECT * FROM `employee`");

    $sth->execute();

    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    echo "<tr><td>ID</td><td>Фамилия</td><td>Имя</td><td>Отчество</td><tr>";
    foreach ($array as $row) {
        echo "<tr>
                <td>{$row['employee_id']}</td>
                <td>{$row['emp_surname']}</td>
                <td>{$row['emp_name']}</td>
                <td>{$row['emp_patronymic']}</td>
                </tr>";
    }
}
catch (PDOException $e) {
    echo "<div>{$e->getMessage()}</div>";
    die();
}
?>


