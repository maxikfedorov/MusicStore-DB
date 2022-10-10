<?php
    $dbh = new PDO(
        'mysql:host=mysql; dbname=MusicStore',
        'root',
        '',
        [PDO::ATTR_PERSISTENT => true]
    );


    $sth = $dbh->prepare("INSERT INTO `employee` 
                                    SET `emp_surname` = :emp_surname, 
                                        `emp_name` = :emp_name,
                                        `emp_patronymic` = :emp_patronymic
                                    ");



    try{

        if (@$_POST['emp_surname'] != '' OR @$_POST['emp_name'] != '' OR @$_POST['emp_patronymic'] != '')
            $sth->execute(array('emp_surname' => $_POST['emp_surname'],
                                'emp_name' => $_POST['emp_name'],
                                'emp_patronymic' => $_POST['emp_patronymic']
            ));

        if (@$_POST['class_id_del'] != '')
            $del = $dbh->exec("DELETE FROM `employee` 
                                            WHERE `employee_id` = {$_POST['class_id_del']}");

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
