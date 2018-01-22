<?php

    $config = $_SERVER["HTTP_HOST"] == "localhost" ? parse_ini_file("local.ini",true) : parse_ini_file("online.ini",true);


    date_default_timezone_set($config["fechas"]["timezone"]);

    error_reporting($config["errores"]["reporting"]);

    ini_set("display_errors",$config["errores"]["display"]);
