<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Страница авторизации</title>

    <!-- Bootstrap -->
    <link href="app/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><strong>Веб-приложение для передачи фото-отчетов для отдела контроля качества</strong></h2>
                <hr>
                <h3><strong>Используемые протоколы:</strong></h3>
                
                <ul>
                    <li class="text text-info"><strong>http (веб-интерфейс приложения)</strong></li>
                    <li class="text text-info"><strong>ftp (передача данных на сервер сбора данных)</strong></li>
                    <li class="text text-info"><strong>MySQLi (работа с БД SQL)</strong></li>
                </ul>
                <hr>
                </p>
                <h3><strong>Используемые технологии:</strong></h3>
                
                <p class="text text-danger"><strong>Фронтенд:</strong></p>
                <ul>
                    <li class='text text-info'><strong>html5</strong></li>
                    <li class='text text-info'><strong>css3</strong></li>
                    <li class='text text-info'><strong>JavaScript(ES6)</strong></li>
                    <li class='text text-info'><strong>bootstrap 3</strong></li>
                </ul>
                <p class="text text-danger"><strong>Бэкэнд:</strong></p>
                <ul>
                    <li class='text text-info'><strong>PHP5.5</strong></li>
                    <li class='text text-info'><strong>MySQL</strong></li>
                </ul>
                <hr>
                <h3><strong>Функционал системы:</h3>
                <ul>
                    <li class="text text-info"><strong>Формирование фото отчетов для отдела контроля качества</strong></li>
                    <li class="text text-info"><strong>Комментирование фото отчетов</strong></li>
                    <li class="text text-info"><strong>Отправка данных на сервер сбора данных</strong></li>
                </ul>
                <hr>
                <h3><strong>Архитектура приложения:</strong></h3>
                <p>При проектировании архитектуры веб-приложения, использовалась схема MVC
                    <br> UI - WebUI
                    <br> Сервисы - API обработки данных
                    <br> Бизнес логика - Предоставление фото отчетов, обмен сообщениями, формирование отчетности
                    <br> Доступ к данным - FTP сервер для хранения фото отчетов, БД для хранения данных по заказам
                    <hr>
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="app/app.php" class="btn btn-primary btn-block">Нажмите на кнопку для ознакомления с функционалом веб-приложения</a>
            </div>
        </div>
        <br>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="app/public/js/bootstrap.min.js"></script>
</body>

</html>