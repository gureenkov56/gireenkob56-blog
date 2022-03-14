<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/php/functions.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN PANEL</title>
    <script src="https://unpkg.com/vue@3"></script>
    <link href="admin-style.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="direction__wrapper">
            <div class="direction-item">
                <img src="../img/admin/dir-icon.png" alt="Direction">
                <span>Posts</span>
            </div>
            <div class="direction-item">
                <img src="../img/admin/dir-icon.png" alt="Direction">
                <span>Categories</span>
            </div>
            <div class="direction-item">
                <img src="../img/admin/dir-icon.png" alt="Direction">
                <span>Users</span>
            </div>
            <div class="direction-item">
                <img src="../img/admin/dir-icon.png" alt="Direction">
                <span>Other</span>
            </div>
        </div>

        <div class="start-menu">
            <div class="start-menu__header">
                <img src="../img/admin/user-icon.jpeg" alt="user">
                <span>ADMIN</span>
            </div>

            <div class="start-menu__orange-line"></div>

            <div class="start_menu__body">
                BODY
            </div>

            <div class="start-menu__bottom">
                <div class="start-menu__bottom__btn">
                    <img src="../img/admin/log-off-icon.jpg" alt="Log off">
                    <span>Log Off</span>
                </div>
                <div class="start-menu__bottom__btn">
                <img src="../img/admin/go-home-btn.jpg" alt="Go home">
                    <span>Home page</span>
                </div>
            </div>

        </div>


        <div class="bottom__menu">
            <button class='bottom__menu__start-btn'>
                <img src="../img/admin/start-btn-icon.png" alt="start">
                <span>ПУСК</span>
            </button>

            <div class="bottom__menu__right-block">
                <span>RU</span>
                <div class="bottom__menu__right-block__time">
                    13:00
                </div>
            </div>
        </div>
    </div>
</body>
</html>



<script>
    Vue.createApp({
        data() {
            return {
                message: 'Hello Vue!',
            }
        }
    }).mount('#app')
</script>