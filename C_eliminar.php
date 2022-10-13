<?php
use Model\M_Usuario;
use Model\Usuario;
require_once 'Model/Usuario.php';
require_once 'Model/M_Usuario.php';



$username = $_GET['username'];
echo $username;
$con = new M_Usuario();

$con->eliminarUsuario($username);
$con->close();

header("Location: C_verUsuarios.php");
exit();
?>