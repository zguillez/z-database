<?php
require 'vendor/autoload.php';
//----------------------------
$db = new Z\Database('***.***.***.***', 'user', '******', 'database');
$data = $db->sql2array('SELECT * FROM users');
$db->test($data);
