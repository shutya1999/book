<?php
require_once("../connect.php");

class View extends Connect
{
    public function getView()
    {
        $sql = $this->getConnect()->query("SELECT * FROM reedbook");
        $result = $sql->fetchAll();
        return $result;
    }
}

$view = new View();
$viewResult = $view ->getView();

//echo "<pre>";
//var_dump($view->getView());
//echo "</pre>";


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
<div class="container">
    <h1>Смотреть Книги</h1>
    <table cellpadding="5px" cellspacing="0" border="2px">
        <tr style="font-weight: 600; color: black; background-color: white" >
            <td>Название Книги</td>
            <td>Имя автора</td>
            <td>Фамилия автора</td>
            <td>Описание</td>
        </tr>
        <? foreach ($viewResult as $val) { ?>
            <tr>
                <td><? echo $val['title']; ?></td>
                <td><? echo $val['firstName']; ?></td>
                <td><? echo $val['secondName']; ?></td>
                <td><? echo $val['description']; ?></td>
            </tr>
        <? } ?>
    </table>

    <form action="book.php">
        <div class="main">
            <button class="btn btn-success" type="submit" name="back">На главную</button>
        </div>
    </form>

    <form action="add-book.php" method="post">
        <div class="add-book">
            <button class="btn btn-primary">Добавить книгу</button>
        </div>
    </form>
</div>


</body>
</html>
