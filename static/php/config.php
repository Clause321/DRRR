<?php

define("MySQLUser","elliott",true);
define("PWD","wangzhan",true);
define("ServerName","localhost",true);
define("DBName","DOLLARS",true);

$mysqli = new mysqli(constant("ServerName"), constant("MySQLUser"), constant("PWD"), constant("DBName"));

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

?>
