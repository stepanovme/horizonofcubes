<!doctype html>
<html lang="ru">
<head>
<?php include 'head.php'; ?>
    <link rel="stylesheet" href="./css/account.css">
    <title>Horizon Of Cubes - Личный кабинет</title>
</head>
<body>

    <?php include 'header_auth.php'; ?>

    <div class="container">
        <div class="row">
            <div class="account offset-4 col-md-4">
                <h1>Аккаунт</h1>
                <div class="blank send-request">
                    <p>Подать заявку</p>
                    <button class="blank_btn">Отправить</button>
                </div>
                <div class="blank discord-link">
                    <div class="font-table">
                        <p class="title">Discord</p>
                        <p>netixon</p>
                    </div>
                    <button class="blank_btn">Изменить</button>
                </div>
                <div class="blank nickname">
                    <div class="font-table">
                        <p class="title">Nickname</p>
                        <p>Netixon</p>
                    </div>
                    <button class="blank_btn">Изменить</button>
                </div>
                <div class="blank e-mail">
                    <div class="font-table">
                        <p class="title">E-mail</p>
                        <p>st.stepanov57@gmail.com</p>
                    </div>
                    <button class="blank_btn">Изменить</button>
                </div>
                <div class="blank password">
                    <div class="font-table">
                        <p class="title">Пароль</p>
                        <p>*************</p>
                    </div>
                    <button class="blank_btn">Изменить</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
