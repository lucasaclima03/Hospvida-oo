<?php
include 'Config.php';

$pdo = new PDO("mysql:dbname=".Config::DB_NAME.";host=".Config::HOST, Config::USER, Config::PASS);

$chave = "AIzaSyB_AU8cPy1MSTYJoxmPS6QrYYIGSV2T66E" ;