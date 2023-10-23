<!doctype html>
<html lang="ru">
<head>
<?php include 'head.php'; ?>
    <link rel="stylesheet" href="./css/register.css">
    <title>Horizon Of Cubes - Регистрация</title>
</head>
<body>

    <?php include 'header_auth.php'; ?>

    <div class="container">
        <div class="row">
            <div class="register offset-4 col-md-4">
                <h1>Регистрация</h1>
                <form action="">

                    <div class="inputBox">
                        <input type="text" name="Nickname" id="Nickname" required>
                        <span>Ник в майнкрафт</span>
                    </div>
                    
                    <div class="inputBox">
                        <input type="text" name="E-mail" id="E-mail" required>
                        <span>E-mail</span>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="Password" id="Password" required>
                        <span>Пароль</span>
                    </div>

                    <div class="inputBox">
                        <input type="password" name="ConfirmPassword" id="ConfirmPassword" required>
                        <span>Подтверждение пароля</span>
                    </div>

                    <button type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
