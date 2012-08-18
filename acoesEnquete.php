<?php
require("utils/conexao.php");
require("utils/utils.php");

$acao = $_REQUEST['acao'];
$titulo = $_REQUEST['titulo'];
$pergunta = $_REQUEST['pergunta'];
$dataini = dateFormatMySql($_REQUEST['dataini']);
$datafim = dateFormatMySql($_REQUEST['datafim']);
$idsituacao = $_REQUEST['idsituacao'];
$idusuario = $_REQUEST['idusuario'];
$idenquete = $_REQUEST['idenquete'];

if($acao == 'incluir'){
	$sucesso = 'Cadastro efetuado com sucesso!';
	$sql = "insert into enquete (titulo,pergunta,dataIniVigencia,dataFimVigencia,idUsuario,idSituacao) values ('".$titulo."','".$pergunta."','".$dataini."','".$datafim."','".$idusuario."','".$idsituacao."')";
	$local = 'cadastroEnquete';
}else if($acao == 'excluir'){
	$sucesso = 'Excluнdo com sucesso!';
	$sql = "delete from enquete where id = '".$id."'";
	$local = 'listarEnquete';
}else if($acao == 'alterar'){
	$sucesso = 'Alterado com sucesso!';
	$sql = "update enquete set nome = '".$nome."',email='".$email."',login='".$login."',senha='".$senha."' where id = '".$id."'";
	$local = 'listarEnquete';
}

if(mysql_query($sql)){
	header("Location:".$local.".php?msg=".$sucesso.$tipoLista);
}else{
	header("Location:".$local.".php?msg=Nгo foi possнvel efetuar a aзгo!".$tipoLista);
}

?>