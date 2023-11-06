<?php 
require_once '../includes/config.php';
$email = $_POST["email"];
$pass = sha1($_POST["pass"]);
$login = "../torres.php?sec=login&error";
$home = "../torres.php?sec=home";
$sql = 'SELECT * FROM usuarios WHERE email = "'. $email .'" AND contraseña = "'. $pass .'"';
$query = mysqli_query($conn, $sql);  
if(!$query){
    die('Hubo un error en la consulta: ' . mysqli_error($conn));
}
$user = mysqli_fetch_all($query, MYSQLI_ASSOC);
if(empty($user)){
    header("Location: $login");
    die();
}else{
    header("Location: $home");
    die();
}
?>