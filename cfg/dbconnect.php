<?php
$server = "localhost";
$uid = "root";
$pwd = "";
$dbname = "login_db";
$conn = new mysqli($server, $uid, $pwd, $dbname);

if ($conn->connect_error)
    die("DB connection failed ".$conn->connect_error);