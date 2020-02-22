<?php
//if ($_POST['unlogin']){
//    header("Location: ../index.php");
//}
//?>
<div class="container">
    <div class="template">

        <div class="add-book">
            <form action="../book/add-book.php" method="post">
                <button class="btn btn-success">Добавить книгу</button>
            </form>
        </div>

        <div class="view-book">
            <form action="../book/view-book.php" method="post">
                <button class="btn btn-info">Посмотреть книги которые я прочитал</button>
            </form>
        </div>

        <div class="exit">
            <form action="../index.php" method="post">
                <input class="btn btn-danger" type="submit" name="unlogin" value="Выйти">
            </form
        </div>
    </div>
</div>


