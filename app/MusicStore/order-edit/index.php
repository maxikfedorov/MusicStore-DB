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

<h1>Таблица order</h1>

<table>
    <?php include_once('output.php') ?>
</table><br>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Добавление элемента:

        <input type="text" placeholder="Клиент ID" name="client_id" />

        <input type="text" placeholder="Сумма заказа" name="order_price" />

        <input type="text" placeholder="Дата заказа" name="order_date" />

        <input type="text" placeholder="Дата выдачи" name="order_date_release" /><br><br>

        Удаление элемента:
        <input type="text" placeholder="ID" name="class_id_del" /><br><br>

        <input type="submit" />
    </form>


</body>

</html>
