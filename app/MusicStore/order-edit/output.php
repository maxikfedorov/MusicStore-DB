<?php
try {

    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );

    include_once('input.php');

    $sth = $dbh->prepare("SELECT * FROM `order_main`");

    $sth->execute();

    $array = $sth->fetchAll(PDO::FETCH_ASSOC);

    echo "<tr><td>ID</td>
              <td>Клиент ID</td>
              <td>Сумма заказа</td>
              <td>Дата заказа</td> 
              <td>Дата выдачи</td> 
               <tr>";
    foreach ($array as $row) {
        echo "<tr><td>{$row['order_id']}</td>
                  <td>{$row['client_id']}</td>
                  <td>{$row['order_price']}</td>
                  <td>{$row['order_date']}</td>
                  <td>{$row['order_date_release']}</td>
        </tr>";
    }
}
catch (PDOException $e) {
    echo "<div>{$e->getMessage()}</div>";
    die();
}
?>


