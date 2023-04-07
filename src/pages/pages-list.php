<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            img {
                min-width: 200px;
                width: 200px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }
            .logo {
                display: inline-flex;
                margin-right: 40px;
                padding: 15px 40px;
            }

            .block-ready {
                color: forestgreen;
                font-weight: 900;
                font-size: 18px;
            }
            .block-ready::before,
            .block-ready::after {
                content: none;
            }
            .ready {
                color: forestgreen;
                font-weight: 600;
            }
        </style>
    </head>

    <body>
    <div style="display: flex; align-items:center; margin: 0 0 15px 20px;">
        <div class="logo">
            <img src="img/logo.svg" width="180" height="50" alt="Логотип компании">
        </div>
        <span style="display: inline-flex; align-items:center; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">00 + ui</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">00 + ui (всего страниц в макете)</span>
        </span>
    </div>
    <div style="font-size: 24px;">Готовые разделы отмечены "<span class="block-ready">Блок готов</span>"</div>

    <div>
        <ul>
            <!--<li class="block-ready">Блок готов</li>-->
            <li><a href="index.php" target="_blank" class="ready">Главная</a></li>
            <!--<li><a href="organizer.php" target="_blank">Организаторам</a></li>-->

            <!--<br>-->
			<!--<li class="block-ready">Блок готов</li>-->
            <!--<li><a href="registration.php" target="_blank">Регистрация (содержит 4 макетных страницы)</a></li>
            <li><a href="auth.php" target="_blank">Авторизация</a></li>
            <li><a href="password-recovery.php" target="_blank">Восстановление пароля (содержит 3 макетных страницы)</a></li>-->

            <!--<br>-->
            <!--<li class="block-ready">Блок готов</li>-->
            <!--<li><a href="ms-news.php" target="_blank">Новости + .main-section-tabs</a></li>-->

            <!--<br>-->
            <!--<li class="block-ready">Блок готов</li>-->  <?/* будут правки ".card" */?>
            <!--<li><a href="details-ecodela.php" target="_blank">детальная - Экодела</a></li>
            <li><a href="details-organizer.php" target="_blank">детальная - Организаторы</a></li>
            <li><a href="details-organizer-reviews.php" target="_blank">детальная - Организаторы отзывы</a></li>
            <li><a href="details-organizer-photo.php" target="_blank">детальная - Организаторы фото</a></li>
            <li><a href="details-organizer-video.php" target="_blank">детальная - Организаторы видео</a></li>-->

            <!--<br>-->
            <!--<li class="block-ready">Блок готов</li>-->
            <!--<li><a href="lk-org-profile.php" target="_blank">ЛК Орг - профиль</a></li>
            <li><a href="lk-org-request.php" target="_blank">ЛК Орг - заявки + .tab-links-slider</a></li>
            <li><a href="lk-org-rights.php" target="_blank">ЛК Орг - права доступа</a></li>-->

            <!--<br>-->
            <!--<li class="block-ready">Блок готов</li>-->
            <!--<li><a href="lk-org-profile-settings.php" target="_blank">ЛК Орг - настройки профиля</a></li>
            <li><a href="lk-org-create-project-settings.php" target="_blank">ЛК Орг - создать проект</a></li>-->

            <br>
            <li><a href="ui.php" target="_blank">ui</a></li>
        </ul>
    </div>
    </body>
</html>