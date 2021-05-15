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
                </div>

            </div>
        </div>
    </section>

</body>

</html>