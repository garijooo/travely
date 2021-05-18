<<<<<<< HEAD
=======
<?php
require_once "./utils/db.php";
if(isset($_POST['log_btn'])) {
    $db = new DataBase("travely_db");

    $login = $_POST['login'];
	$password = hash("sha256", $_POST['password']);

	$query = "SELECT `id` FROM `users` WHERE `users_login` = '$login' AND `users_password` = '$password'";
	$get_id = mysqli_fetch_array($db->sql($query));

	if(!$get_id['id']) echo "ОШИБКА ВХОДА"; // неверно что-то
	else{
		setcookie("id",$get_id['id'],time()+50000);
        if(isset($_COOKIE['id'])) header("Location: tours.php");
    }
}
?>


>>>>>>> 208e649fd392a1cf650269e091f48dac88fe1719
<!DOCTYPE html>
<html lang="en">

<head>

    <?php require 'template/meta.php'; ?>

    <title>Travely</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php require 'template/header_client.php'; ?>

    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section_title">Вход</h2>
                <div class="section-text">
                    <p>«Посмотри на мир. Он куда удивительнее cнов» — Рэй Брэдберри</p>
                </div>

                <div class="body_form">
<<<<<<< HEAD
                    <div class="form">

                        <div class="input-form">
                            <input class="input-form-el" type="text" placeholder="Логин">
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="password" placeholder="Пароль">
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="submit" value="Войти">
                        </div>
                        <a href="forget.php" class="forget">Забыли пароль?</a>
                        <a href="registr.php" class="register">Регистрация</a>
                    </div>
=======
                    <form class="form" action="" method="POST">

                        <div class="input-form">
                            <input class="input-form-el" type="text" placeholder="Логин" name="login">
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="password" placeholder="Пароль" name="password">
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="submit" value="Войти" name="log_btn">
                        </div>
                        <a href="forget.php" class="forget">Забыли пароль?</a>
                        <a href="registr.php" class="register">Регистрация</a>
                    </form>
>>>>>>> 208e649fd392a1cf650269e091f48dac88fe1719
                </div>

            </div>
        </div>
    </section>

</body>

</html>