<!DOCTYPE html>
<html>
<head>
    <title>#DEV_</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
include ("blocks/header.php");
include ("controllers/users.php");
?>



<main role="main">
    <div class="wrapper">
        <nav class="navbar  bg-dark justify-content-center">
            <div class="d-flex justify-content-center">
                <a href="index.php" class="navbar-brand text-white">Main page</a>
                <a href="https://steamcommunity.com/id/neshark/" class="navbar-brand text-white">Steam</a>
                <a href="https://vk.com/maybuk97" class="navbar-brand item text-white">Vk</a>
                <a href="https://github.com/karfagen99" class="navbar-brand item text-white ">Github</a>
                <a href="https://gitlab.com/Eyeofgod" class="navbar-brand item text-white ">Gitlab</a>
                <a href="#" class="navbar-brand item text-white">Books</a>
            </div>

            <form class="form-inline ">
                <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Search</button>
            </form>

            <a href="register.php" class="navbar-brand item text-white">Reg</a>
        </nav>

        <div class="main-tab">
            <div class="__form-register"><h2>Форма регистрации</h2></div>

            <form action="register.php" method="POST">
                <div class="__register-group">


                    <label class="__label-register" for="inputName"><h2>Введите имя</h2></label>
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Имя">

                    <label class="__label-register" for="inputSurName"><h2>Введите фамилию</h2></label>
                    <input type="text" name="surName" class="form-control" id="inputSurName" placeholder="Фамилия">

                    <label class="__label-register" for="inputPass"><h2>Введите пароль</h2></label>
                    <input type="password" name="pass" class="form-control" id="inputPass" placeholder="Пароль">

                    <label class="__label-register" for="inputEmail"><h2>Введите email</h2></label>
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">

                    <button type="submit" class="btn btn-primary btn-lg mt-3" name="btnReg">Регистрация</button>
                </div>


            </form>




</main>
<script src="../base.js"></script>
<script src="../plugins/modal.js"></script>
<script src="../index.js"></script>

<?php include ("blocks/footer.php");?>
