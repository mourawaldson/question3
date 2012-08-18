<?php
require("utils.php");

$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

if($login == "" || $senha == ""){
	header("Location:../index.php?msg=Preencha todos os campos!");
}else{
	require("conexao.php");	
	if(verificaExistencia($login,$senha) >= 1){
		$dadosUsuario = dadosUsuario($login,$senha);
		mysql_query("insert into usuariologado (idUsuario,dataHora) values ('".$dadosUsuario['id']."',now())");
		session_start();
		$_SESSION['usuario']['0'] = $dadosUsuario['id'];
		$_SESSION['usuario']['1'] = $dadosUsuario['login'];
		$_SESSION['usuario']['2'] = $dadosUsuario['senha'];
		$_SESSION['usuario']['3'] = $dadosUsuario['email'];
		$_SESSION['usuario']['4'] = $dadosUsuario['nome'];
		header("Location:../principal.php");
	}else{
		header("Location:../index.php?msg=Login ou senha incorretos!");
	}
}
?>