<?php
session_start();
require_once('../connect.php');
//$test = new Connect();
//$test -> getConnect();

class Registration extends Connect
{
    public $loginDb;
    public $emailDb;
    public $passDb;
    public $test = true;

    public function getLoginDb($loginDb, $emailDb,$passDb)
    {
        $getLogin = $this->getConnect()->query("SELECT * FROM `user`");
//        if ($loginDb) {
            foreach ($getLogin as $login) {
                if ($login['login'] == $loginDb) {
                    echo "Такой логин занят"."<br>";
                    $this->test = false;
                }if ($login['email'] == $emailDb) {
                    echo "Такой Email уже есть в базе"."<br>";
                    $this->test = false;
                }
            }
//      }
        return $this->test;
    }

    public function getTest($loginDb, $emailDb,$passDb)
    {
        if ($this->getLoginDb($loginDb, $emailDb,$passDb) == true) {

            if ($loginDb == "") {
//                echo "pusto";
            } else {
                $registration = $this->getConnect()->query("INSERT INTO user (login,email,pass) VALUES ('$loginDb','$emailDb','$passDb')");

                if ($registration == false) {
                    echo "Error";
                } else {
                    $_SESSION['login'] = $loginDb;
                    $_SESSION['pass'] = $passDb;
                    header("Location: ../book/book.php");
                }
            }
        }
    }
}

$getLoginDb = new Registration();
$getLoginDb->getLoginDb($_POST['login'], $_POST['email'],$_POST['pass']);

$test = new Registration();
$test->getTest($_POST['login'], $_POST['email'],$_POST['pass']);


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
    <h1>Регистрация</h1>
    <form action="" method="post">
        <div class="form-login">

            <div class="login">
                <label for="">Логин: </label>
                <input type="text" name="login" placeholder="Логин" required><br>
            </div>

            <div class="e-mail">
                <label for="">E-mail: </label>
                <input type="email" name="email" placeholder="E-mail" required><br>
            </div>

            <div class="pass">
                <label for="">Пароль: </label>
                <input type="password" name="pass" placeholder="Пароль" required>
            </div>

            <div class="vhod">
                <button class="btn btn-success">Регистрация</button>
            </div>

        </div>
</div>

</body>
</html>