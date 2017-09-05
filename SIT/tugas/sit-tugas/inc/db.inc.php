<?php
$host    = 'localhost';
$db      = 'sample';
$user    = 'root';
$pass    = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);
?>