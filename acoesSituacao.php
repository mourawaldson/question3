<?php

$acao = $_REQUEST['acao'];
$nome = $_REQUEST['nome'];
$id = $_REQUEST['id'];

require("utils/conexao.php");

if($acao == 'incluir'){
	$sucesso = 'Cadastro efetuado';
	$sql = "insert into situacao (nome) values ('".$nome."')";
	$local = 'cadastroSituacao';
}else if($acao == 'excluir'){
	$sucesso = 'Excluнdo';
	$sql = "delete from situacao where id = '".$id."'";
	$local = 'listarSituacao';
}else if($acao == 'alterar'){
	$sucesso = 'Alterado';
	$sql = "update situacao set nome = '".$nome."' where id = '".$id."'";
	$local = 'listarSituacao';
}

if(mysql_query($sql)){
	header("Location:".$local.".php?msg=".$sucesso." com sucesso!");
}else{
	header("Location:".$local.".php?msg=Nгo foi possнvel efetuar a aзгo!");
}

?>