<?php
require("utils/erro.php");
session_start();
$id = $_REQUEST['id'];

require("utils/conexao.php");

$sqlSit = 'select * from usuario where id = '.$id;

$item = mysql_fetch_row(mysql_query($sqlSit));

require("includes/topo.php");
?>
	
	<div id="latEsq">
		<form id="frmLogin" action="acoesUsuario.php?acao=alterar" onSubmit="return checa(this);" method="post">
			<label>Nome:
			<input type="text" name="nome" value="<?php echo $item['1']; ?>" /></label>
			<label>E-mail:
			<input type="text" name="email" value="<?php echo $item['2']; ?>" /></label>
			<label>Login:
			<input type="text" name="login" value="<?php echo $item['3']; ?>" /></label>
			<label>Senha:
			<input type="password" name="senha" value="<?php echo $item['4']; ?>" /></label>
			<input name="id" type="hidden" value="<?php echo $item['0']; ?>">
			<input type="submit" value="Alterar" /><br />
			<?php if($msg){echo $msg;}?>
		</form>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>