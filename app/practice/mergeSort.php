<html lang="ru">

<head>
    <title>Merge Sorting</title>
</head>

    <body>

    <h1> Merge Sorting </h1>

        <?php

            $arr = [3, 1, 2, 5, 4, 8, 5, 9, 10, 364, 34, 8];

            echo "Prev Arr: ";

            foreach ($arr as $value)
            echo "- [$value] ";

            echo "<br>New Arr:";

            include_once('./backend-mergeSort.php');

            $result = mergeSort($arr);

            foreach ($result as $value)
                echo " - [$value]";

            ?>

    </body>
</html>




















