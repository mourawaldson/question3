<?php
session_start();
require("conexao.php");

$sql = "delete from usuariologado where idUsuario = '".$_SESSION['usuario']['0']."'";

if(mysql_query($sql)){
	unset($_SESSION['usuario']);
	header("Location: ../index.php");
}
?>