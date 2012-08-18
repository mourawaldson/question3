<?php
require("utils/conexao.php");

$acao = $_REQUEST['acao'];
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];
$id = $_REQUEST['id'];

if($acao == 'incluir'){
	$sucesso = 'Cadastro efetuado com sucesso!';
	$sql = "insert into usuario (nome,email,login,senha) values ('".$nome."','".$email."','".$login."','".$senha."')";
	$local = 'cadastroUsuario';
	$tipoLista = '';
}else if($acao == 'excluir'){
	$sucesso = 'Excluнdo com sucesso!';
	$sql = "delete from usuario where id = '".$id."'";
	$local = 'listarUsuario';
	$tipoLista = '&acao=usuarios';
}else if($acao == 'alterar'){
	$sucesso = 'Alterado com sucesso!';
	$sql = "update usuario set nome = '".$nome."',email='".$email."',login='".$login."',senha='".$senha."' where id = '".$id."'";
	$local = 'principal';
	$tipoLista = '';
}

if(mysql_query($sql)){
	header("Location:".$local.".php?msg=".$sucesso.$tipoLista);
}else{
	header("Location:".$local.".php?msg=Nгo foi possнvel efetuar a aзгo!".$tipoLista);
}

?>