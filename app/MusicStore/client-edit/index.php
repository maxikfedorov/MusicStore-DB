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

<h1>Таблица clients</h1>

<table>
    <?php include_once('output.php') ?>
</table>
<br>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Добавление клиента:
        <input type="text" placeholder="Адрес" name="client_adress" />

        <input type="text" placeholder="Телефон" name="client_phone" />

        <input type="text" placeholder="Фамилия" name="client_surname" /><br><br>

        Удаление клиента:
        <input type="text" placeholder="ID" name="client_id_del" /><br><br>

        <input type="submit" />
    </form>


</body>

</html>
