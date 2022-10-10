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

<h1>Таблица items</h1>

<table>
    <?php include_once('output.php') ?>
</table><br>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Добавление элемента:
        <input type="text" placeholder="Class ID" name="class_id" />

        <input type="text" placeholder="Брэнд" name="item_brand" />

        <input type="text" placeholder="Название" name="item_name" />

        <input type="text" placeholder="Дата изготовления" name="fact_date" />

        <input type="text" placeholder="Страна изготовления" name="fact_country" />

        <input type="text" placeholder="Количество" name="item_amount" />

        <input type="text" placeholder="Цена" name="item_price" /><br><br>

        Удаление элемента:
        <input type="text" placeholder="ID" name="class_id_del" /><br><br>

        <input type="submit" />
    </form>


</body>

</html>
