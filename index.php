<?php

require 'vendor/autoload.php';

echo "hello World!";
$user = "project";
$pass = "project";
$db = new PDO('mysql;host=127.0.0.1:3306;dbname=project;charset=UTF-8', $user, $pass);
echo "this is $db";
