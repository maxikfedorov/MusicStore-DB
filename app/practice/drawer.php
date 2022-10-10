<html lang="ru">
<head>
    <title>Hello world page</title>
    <link rel="stylesheet" href="../style.css" type="text/css"/>
</head>
<body>

    <?php include_once('./backend-drawer.php'); ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Enter your param: <input type="text" name="param" />
        <input type="submit" />
    </form>

</body>
</html>