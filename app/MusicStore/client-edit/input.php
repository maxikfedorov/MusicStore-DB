<?php

    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );

    $sth = $dbh->prepare("INSERT INTO `clients` SET `client_adress` = :client_adress, `client_phone` = :client_phone, `client_surname` = :client_surname");

    $tableName = $_COOKIE['table-name'] ?? 'clients';

    try{

        if (@$_POST['client_adress'] != '' OR @$_POST['client_phone'] != '' OR @$_POST['client_surname'] != '')
            $sth->execute(array('client_adress' => $_POST['client_adress'], 'client_phone' => $_POST['client_phone'], 'client_surname' => $_POST['client_surname']));

        if (@$_POST['client_id_del'] != '')
            $del = $dbh->exec("DELETE FROM `clients` WHERE `client_id` = {$_POST['client_id_del']}");

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
