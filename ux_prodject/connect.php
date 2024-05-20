<?php
//Подключение к базе данных
mysql_connect("tiflolab.mysql", "tiflolab_itmo", "LW-6akOX")
//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("tiflolab_itmo")
//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
?>