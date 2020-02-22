<?php

session_start();

if (!$_SESSION['login'] || !$_SESSION['pass'])
{
    header("Location: ../login.php");
    die();
}

if ($_POST['unlogin']){
    session_destroy();
    header("Location: ../index.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Zdafova bandit </h1>

<form action="" method="post">
    <input type="submit" name="unlogin" value="Назад сука">
</form>

</body>
</html>
