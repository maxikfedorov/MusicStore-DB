<?php require "header.html"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<main class="container">

    <a href="clients.php?table-name=clients"><input class="custom-btn btn" name="clients" type="submit" value="Клиенты" /></a>

    <a href="employee.php?table-name=clients"><input class="custom-btn btn" name="clients" type="submit" value="Сотрудники" /></a>

    <a href="items.php?table-name=clients"><input class="custom-btn btn" name="clients" type="submit" value="Инструменты" /></a>

    <a href="order.php?table-name=clients"><input class="custom-btn btn" name="clients" type="submit" value="Заказы" /></a>

    <a href="order-list.php?table-name=clients"><input class="custom-btn btn" name="clients" type="submit" value="Список заказа" /></a>

</main>

<script src="script.js"></script>

<?php require "footer.html"; ?>

