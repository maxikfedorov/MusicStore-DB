<?php
    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );


    $sth = $dbh->prepare("INSERT INTO `order_main` 
                                SET `client_id` = :client_id, 
                                    `order_price` = :order_price,
                                    `order_date` = :order_date, 
                                    `order_date_release` = :order_date_release
                                ");

    try{

        if (@$_POST['client_id'] != '' OR
            @$_POST['order_price'] != '' OR
            @$_POST['order_date'] != '' OR
            @$_POST['order_date_release'] != ''
        )
            $sth->execute(array('client_id' => $_POST['client_id'],
                                'order_price' => $_POST['order_price'],
                                'order_date' => $_POST['order_date'],
                                'order_date_release' => $_POST['order_date_release']

            ));

        if (@$_POST['class_id_del'] != '')
            $del = $dbh->exec("DELETE FROM `order_main` WHERE `order_id` = {$_POST['class_id_del']}");

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
