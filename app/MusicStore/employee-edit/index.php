<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style-tables.css" type="text/css"/>
</head>


<body>

<h1>Таблица employee</h1>

<table>
    <?php include_once('output.php') ?>
</table><br>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Добавление сотрудника:
        <input type="text" placeholder="Фамилия" name="emp_surname" />

        <input type="text" placeholder="Имя" name="emp_name" />

        <input type="text" placeholder="Отчество" name="emp_patronymic" /><br><br>

        Удаление сотрудника:
        <input type="text" placeholder="ID" name="class_id_del" /><br><br>

        <input type="submit" />
    </form>


</body>

</html>
