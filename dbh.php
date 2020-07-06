<?php
if (!isset($_SESSION)) {
    session_start();
}

$host = 'localhost';
$username = 'ronie';
$password = 'ronie';
$database = 'celine_peter_store';

$mysqli = new mysqli($host, $username, $password, $database) or die(mysqli_error($mysqli));

?>