<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>Php Calendar</title>
  <link rel="stylesheet" type="text/css" media="screen" href="calendar.css">
</head>

<body>

<?php

ini_set('display_errors',1);  error_reporting(E_ALL);
  $find = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
  $lang = substr($find,0,2);

    include("calendar_en.php");
?>

</body>

</html>