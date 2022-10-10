<?php
    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );


    $sth = $dbh->prepare("INSERT INTO `order_list` 
                                SET 
                                    `order_id` = :order_id, 
                                    `item_id_ord` = :item_id_ord,
                                    `quantity` = :quantity,
                                    `price` = :price
                                ");



    try{

        if (@$_POST['order_id'] != '' OR
            @$_POST['item_id_ord'] != '' OR
            @$_POST['quantity'] != '' OR
            @$_POST['price'] != '')
        {
            if($_POST['price'] == '')
                $price = NULL;
            else
                $price = $_POST['price'];

            $sth->execute(array('order_id' => $_POST['order_id'],
                'item_id_ord' => $_POST['item_id_ord'],
                'quantity' => $_POST['quantity'],
                'price' => $price
            ));




        }


        if (@$_POST['order_id_del'] != '' AND @$_POST['item_id_ord_del'] != '')
            $del = $dbh->exec("DELETE FROM `order_list` 
                                        WHERE
                                            (`order_id` = {$_POST['order_id_del']} AND
                                            `item_id_ord` = {$_POST['item_id_ord_del']})                                  
            ");

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
