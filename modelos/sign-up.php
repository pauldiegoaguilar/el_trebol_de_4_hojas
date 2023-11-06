<?php
require_once '../includes/config.php';
$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"] != NULL ? $_POST["tel"] : NULL;
$pass = $_POST["pass"];
$passVerif = $_POST["passVerif"];
?>