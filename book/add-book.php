<?php
require_once("../connect.php");

class Add extends Connect
{
    public $title;
    public $firstName;
    public $secondName;
    public $description;

    public function getBook($title, $firstName, $secondName, $description)
    {
        if ($title == "") {
//            echo "Pusto";
        } else {
            $sql = $this->getConnect()->query("INSERT INTO reedbook (title, firstName, secondName, description)
            VALUES ('$title','$firstName','$secondName','$description')");

            if ($sql == false) {
                echo "error";

            } else {
                header("Location: redirect.php");
            }
        }
        return $sql;
    }
}
$test = new Add();
$test->getBook($_POST['title'], $_POST['firstName'], $_POST['secondName'], $_POST['description']);
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
<h1>Добавить Книгу</h1>
<?require_once ('../template/main.php'); ?>

<div class="container">
    <form action="" method="post">
        <div class="add">
            <input class="title" type="text" name="title" size="50px" placeholder="Книга" required>
            <input class="FN" type="text" name="firstName" size="50px" placeholder="Имя" required>
            <input class="SN" type="text" name="secondName" size="50px" placeholder="Фамилия" required>
            <p><textarea name="description" id="" cols="52" rows="10" placeholder="Описание"></textarea></p>
            <button type="submit" class="add-book-btn">Добавить книгу</button>
        </div>
    </form>
</div>

</body>
</html>



