<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Веб-приложение</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="public/css/navmenupush.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- OffCanvas -->
    <script src="public/js/offcanvas.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--  role="navigation"  -->
    <nav class="navmenu navmenu-default navmenu-fixed-left offcanvas">
        <a class="navmenu-brand" href="#">Логотип компании</a>
        <ul class="nav navmenu-nav">
            <li class="active"><a href="#">Отправка фотографий на FTP</a></li>
            <li><a href="#">Загрузка фотографий</a></li>
            <li><a href="#">О программе</a></li>
        </ul>
    </nav>
    <div class="navbar navbar-default navbar-fixed-top">
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--
        <script>
            $('.navmenu').offcanvas();
        </script>
-->
    </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jasny-bootstrap.min.js"></script>
</body>

</html>