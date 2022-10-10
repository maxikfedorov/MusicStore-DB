<?php
    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );

           /*     <td>{$row['item_id']}</td>
                  <td>{$row['class_id']}</td>
                  <td>{$row['item_brand']}</td>
                  <td>{$row['item_name']}</td>
                  <td>{$row['fact_date']}</td>
                  <td>{$row['fact_country']}</td>
                  <td>{$row['item_amount']}</td>
                  <td>{$row['item_price']}</td>*/


$sth = $dbh->prepare("INSERT INTO `items` 
                                SET `class_id` = :class_id, 
                                    `item_brand` = :item_brand,
                                    `item_name` = :item_name,
                                    `fact_date` = :fact_date,
                                    `fact_country` = :fact_country,
                                    `item_amount` = :item_amount,
                                    `item_price` = :item_price
    ");



    try{

        if (@$_POST['class_id'] != ''
            OR @$_POST['item_brand'] != ''
            OR @$_POST['item_name'] != ''
            OR @$_POST['fact_date'] != ''
            OR @$_POST['fact_country'] != ''
            OR @$_POST['item_amount'] != ''
            OR @$_POST['item_price'] != ''
        )
            $sth->execute(array('class_id' => $_POST['class_id'],
                                'item_brand' => $_POST['item_brand'],
                                'item_name' => $_POST['item_name'],
                                'fact_date' => $_POST['fact_date'],
                                'fact_country' => $_POST['fact_country'],
                                'item_amount' => $_POST['item_amount'],
                                'item_price' => $_POST['item_price']
            ));

        if (@$_POST['class_id_del'] != '')
            $del = $dbh->exec("DELETE FROM `items` WHERE `item_id` = {$_POST['class_id_del']}");

    }
    catch (PDOException $e) {
        echo "Ошибка при работе с таблицей<br><br>";
        echo "Код ошибки: $e<br><br>";
        echo '<a href="index.php">Вернуться на главную страницу</a>';
        die(); //- сайт умирает

    }

    unset($class_id);
    unset($class_descr);
    unset($_POST['class_id_del']);
