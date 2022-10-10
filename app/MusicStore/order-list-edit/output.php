<?php
try {

    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );

    include_once('input.php');

    $sth = $dbh->prepare("SELECT * FROM `order_list`");

    $sth->execute();

    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    echo "<tr><td>Заказ ID</td>
              <td>Инструмент ID</td>
              <td>Количество</td>
              <td>Цена</td>
          <tr>";


    foreach ($array as $row) {
        echo "<tr><td>{$row['order_id']}</td>
                  <td>{$row['item_id_ord']}</td>
                  <td>{$row['quantity']}</td>
                  <td>{$row['price']}</td>
              </tr>";
    }
}
catch (PDOException $e) {
    echo "<div>{$e->getMessage()}</div>";
    die();
}
?>


