<?php

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
    <h3 style=" text-transform: uppercase; text-align: center ">Книга добавлена в базу данных!!!</h3>
<div class="container">
    <form action="book.php">
        <div class="add-book">
            <button class="btn btn-success" type="submit" name="back">На главную</button>
        </div>
    </form>

    <form action="view-book.php">
        <div class="view-book">
            <button class="btn btn-info" type="submit" name="back">Посмотреть прочитаные книги</button>
        </div>
    </form>
</div>

</body>
</html>
