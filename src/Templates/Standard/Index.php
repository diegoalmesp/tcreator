<?php

namespace Templates\Standard;

class Index
{
    function __construct()
    {
        # code...
    }

    public static function getText()
    {
        return [
'<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Bienvenidos - Mi Claro</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Claro">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/custom2.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/libreria.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- /Siempre incluimos esto-->
    <!-- Momentaneo-->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Web Font de Iconos-->
    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <!-- //// -->
    <!-- Fuente Roboto-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700" rel="stylesheet" type="text/css">
    <!-- //// -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <h1>Test!!</h1>
</body>
</html>'
];
    }
}

?>