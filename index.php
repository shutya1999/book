<?php
session_start();

require_once ('connect.php');
class Login extends Connect
{

    public $login;
    public $pass;

    public function getLogin($login,$pass)
    {
//        $connect = new PDO('mysql:host=localhost; dbname=book; charset=utf8','root','');
        $loginConnect = $this->getConnect()->query("SELECT * FROM `user`");

        if ($login){
            foreach ($loginConnect as $value)
            {
                if ($login == $value['login'] and $pass == $value['pass'] )
                {
                    $_SESSION['login'] = $login;
                    $_SESSION['pass'] = $pass;
                    header("Location: book/book.php");
                }
            }
//            echo "Неверный логин или пароль :(((";
            echo "<p style='padding-left: 120px;'>".'Неверный логин или пароль((('."</p>";
        }
    }
}

$loginClass = new Login();
$loginClass -> getLogin($_POST['login'],$_POST['pass'])


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<h1>Вход</h1>

<div class="container">
    <div class="test1">
<!--        <img src="img/pepe.jpg" alt="">-->
        <form action="" method="post">
            <div class="form-login">

                <div class="login">
                    <label for="">Логин: </label>
                    <input type="text" name="login" placeholder="Логин" required><br>
                </div>
                <div class="pass">
                    <label for="">Пароль: </label>
                    <input type="password" name="pass" placeholder="Пароль" required>
                </div>
                <div class="vhod">
<!--                    <button class="btn">Вход</button>-->
<!--                    <ion-icon name="exit-outline"></ion-icon>-->
                    <button  class="btn btn-success">Вход</button>

                </div>

            </div>
        </form>
    </div>

    <div class="test2">
        <form method="post" action="login/registration.php">
            <div class="registration">
                <button class="btn btn-primary">Регистрация</button>
            </div>
        </form>
    </div>

</div>

</body>
</html>
