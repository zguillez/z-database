<?php
require 'vendor/autoload.php';
//----------------------------
$zdatabase = new Z\Database();
/** */
$zdatabase->connect('***.***.***.***', 'user', '********', 'database');
$data = $tools->sql2array('SELECT * FROM tabla');
$zdatabase->test($data);
