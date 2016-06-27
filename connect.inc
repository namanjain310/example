<?php
session_start();
$server='localhost'; 
$username='root'; 
$password='igdefault';
$databasename= 'example';

if (!$link = mysql_connect($server, $username, $password)) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db($databasename, $link)) 
{
    echo 'Could not select database';
    exit;
}
?>
