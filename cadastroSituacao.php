<?php
require("utils/erro.php");
session_start();
if($_REQUEST['msg']){
	$msg = $_REQUEST['msg'];
}
require("includes/topo.php");
?>

	<div id="latEsq">
		<form id="frmLogin" action="acoesSituacao.php?acao=incluir" onSubmit="return checa(this);" method="post">
			<label>Nome:
			<input type="text" name="nome" /></label>
			<input type="submit" value="Cadastrar" /><br />
			<?php if($msg){echo $msg;}?>
		</form>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>