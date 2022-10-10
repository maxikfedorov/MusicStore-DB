<?php
    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );


    $sth = $dbh->prepare("INSERT INTO `item_class` SET `class_id` = :class_id, `class_descr` = :class_descr");



    try{

        if (@$_POST['class_id'] != '' OR @$_POST['class_descr'] != '')
            $sth->execute(array('class_id' => $_POST['class_id'], 'class_descr' => $_POST['class_descr']));

        if (@$_POST['class_id_del'] != '')
            $del = $dbh->exec("DELETE FROM `item_class` WHERE `class_id` = {$_POST['class_id_del']}");

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
