<!DOCTYPE html>
<html lang="ru">

<head>

    <title>Тестовая страница</title>
    <link rel="stylesheet" href="style-nav.css" type="text/css"/>

</head>


<body>

<?php

$name = "Tom";
$age = 36;
setcookie("name", $name);
setcookie("age", $age, time() + 3600);  // срок действия - 1 час (3600 секунд)
echo "Куки установлены";

if (isset($_COOKIE["name"])) echo "Name: " . $_COOKIE["name"] . "<br>";
if (isset($_COOKIE["age"])) echo "Age: " . $_COOKIE["age"] . "<br>";

?>


<div class="button-blcok">
    <div class="wrapper">
        <button  id="btn1" class="myBtn">show 1</button>
        <button  id="btn2" class="myBtn">show 2</button>
    </div>
    <button id="btnall" class="myBtn">show all</button>
</div>

<div class="content-box">
    <div class="show_1 show content__tittle">1</div>
    <div class="show_1 show content__tittle">1</div>
    <div class="show_2 show content__tittle">2</div>
    <div class="show_1 show content__tittle">1</div>
</div>

<script src="script.js"></script>

</body>

</html>
