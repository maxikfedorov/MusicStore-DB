<?php
try {

    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );

    include_once('input.php');

    $sth = $dbh->prepare("SELECT * FROM `items`");

    $sth->execute();

    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    echo "<tr><td>ID</td>
              <td>Тип</td>
              <td>Брэнд</td>
              <td>Название</td>
              <td>Дата изготовления</td>
              <td>Страна изготовления</td>
              <td>Количество</td>
              <td>Цена</td>
              <tr>";

    foreach ($array as $row) {
        echo "<tr><td>{$row['item_id']}</td>
                  <td>{$row['class_id']}</td>
                  <td>{$row['item_brand']}</td>
                  <td>{$row['item_name']}</td>
                  <td>{$row['fact_date']}</td>
                  <td>{$row['fact_country']}</td>
                  <td>{$row['item_amount']}</td>
                  <td>{$row['item_price']}</td>                           
        </tr>";
    }
}
catch (PDOException $e) {
    echo "<div>{$e->getMessage()}</div>";
    die();
}
?>


