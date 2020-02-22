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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
<?require_once ('../template/main.php'); ?>
<h1>Книги котрые я прочитал</h1>

<!--<div class="container">-->
<!--    <h1>Книги котрые я прочитал</h1>-->
<!--    <form action="add-book.php" method="post">-->
<!--        <div class="add-book">-->
<!--            <button class="btn btn-success">Добавить книгу</button>-->
<!--        </div>-->
<!--    </form>-->
<!--    <form action="view-book.php" method="post">-->
<!--        <div class="view-book">-->
<!--            <button class="btn btn-info">Посмотреть книги которые я прочитал</button>-->
<!--        </div>-->
<!--    </form>-->
<!---->
<!--    <div class="exit">-->
<!--        <form action="" method="post">-->
<!--            <input class="btn btn-danger" type="submit" name="unlogin" value="Выйти">-->
<!--        </form-->
<!--    </div>-->
<!---->
<!--</div>-->


</body>
</html>
