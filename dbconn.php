<?php

$server = 'localhost';
$username = 'root';
$pwd = '';
$db = 'test';

$conn = mysqli_connect($server, $username, $pwd, $db);

if ($conn) {

} else {
    mysqli_connect_error();
}