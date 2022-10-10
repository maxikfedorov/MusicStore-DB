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

<h1>Таблица order-list</h1>

<table>
    <?php include_once('output.php') ?>
</table><br>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Добавление элемента:
        <input type="text" placeholder="Заказ ID" name="order_id" />

        <input type="text" placeholder="Инструмент ID" name="item_id_ord" />

        <input type="text" placeholder="Количество" name="quantity" />

        <input type="text" placeholder="Цена (опционально)" name="price"/><br><br>

        Удаление элемента:
        <input type="text" placeholder="Заказ ID" name="order_id_del" />
        <input type="text" placeholder="Инструмент ID" name="item_id_ord_del" /><br><br>

        <input type="submit" />
    </form>


</body>

</html>
