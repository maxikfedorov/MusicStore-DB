<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>


<body>

<table>
    <?php include_once('output.php') ?>
</table>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Добавление элемента:
    <input type="text" placeholder="ID" name="class_id" />

    <input type="text" placeholder="Class" name="class_descr" />

    <input type="submit" />
</form>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Удаление элемента:
    <input type="text" placeholder="ID" name="class_id_del" />

    <input type="submit" />
</form>

</body>

</html>
