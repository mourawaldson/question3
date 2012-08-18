<?php
require("utils/erro.php");
session_start();
$id = $_REQUEST['id'];

require("utils/conexao.php");

$sqlSit = 'select nome from situacao where id = '.$id;

$item = mysql_fetch_row(mysql_query($sqlSit));
require("includes/topo.php");
?>
	
	<div id="latEsq">
		<form id="frmLogin" action="acoesSituacao.php?acao=alterar" onSubmit="return checa(this);" method="post">
			<label>Nome:
			<input type="text" name="nome" value="<?php echo $item['0']; ?>" /></label>
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			<input type="submit" value="Alterar" /><br />
		</form>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>