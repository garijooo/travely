<?php 
require_once "./utils/db.php";

if(isset($_POST['reg_btn'])){
    $db = new DataBase("travely_db");

    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];

    if($password == $passwordConfirm) {
        $hashed_password = hash("sha256", $password);
        $login = $_POST['login'];

        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $patronymic = $_POST['patronymic'];

        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];

        $query = "SELECT `id` FROM `users` WHERE `users_login` = '$login'";
        $get_logins = $db->sql($query);
        $fetch = mysqli_fetch_array($get_logins);

        if(!$fetch) {
            $query = "INSERT INTO `users`(`users_login`,`users_password`,`users_name`,`users_lname`,`users_patronymic`,`users_mail`, `users_number`) VALUES ('$login','$hashed_password','$name','$lname','$patronymic','$email','$phonenumber ')";
            $db->sql($query);

            $query = "SELECT `id` FROM `users` WHERE `users_login` = '$login' AND `users_password` = '$hashed_password'";
            $get_id = mysqli_fetch_array($db->sql($query));

            if(!$get_id['id']) echo "ОШИБКА ВХОДА"; // неверно что-то
            else{
                setcookie("id",$get_id['id'],time()+50000);
                if(isset($_COOKIE['id'])) header("Location: tours.php");
            }

        }
        else echo "ОШИБКА РЕГИСТРАЦИИ. ВВЕДИТЕ ДРУГОЙ ЛОГИН"; //// Если занят Логин
    }
    else echo "пароли неверны";
}
?>


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
                <h2 class="section_title">Регистрация</h2>
                <div class="section-text">
                    <p>«Путешествовать необходимо тем, кто учится» — Марк Твен</p>
                </div>

                <div class="body_form_registr">
                    <form class="form" action="" method="POST">
                        
                        <div class="input-form">
                            <input class="input-form-el" type="text" placeholder="Имя" name="name" required>
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="text" placeholder="Фамилия" name="lname" required>
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="text" placeholder="Отчество" name="patronymic" required>
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="email" placeholder="Введите ваш @mail" name="email" required>
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="text" placeholder="Телефон" name="phonenumber" required>
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="text" placeholder="Логин" name="login" required>
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="password" placeholder="Пароль" name="password" required>
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="password" placeholder="Повторите пароль" name="passwordConfirm" required>
                        </div>
                        <div class="input-form">
                            <input class="input-form-el" type="submit" value="Регистрация" name="reg_btn">
                        </div>
                        <a href="login.php" class="come">Войти</a>
                        
                    </form>
                </div>

            </div>
        </div>
    </section>

</body>

</html>