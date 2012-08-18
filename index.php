<?php
require("utils/erro.php");
session_start();
if($_REQUEST['msg']){
	$msg = $_REQUEST['msg'];
}
require("includes/topo.php")
?>
	
	<div id="latEsq">
		<form id="frmLogin" action="utils/login.php" method="post">
			<label>Login:
			<input type="text" name="login" /></label>
			<label>Senha:</label>
			<input type="password" name="senha" />
			<input type="submit" value="Logar" /><br />
			<?php if($msg){echo $msg;}?>
		</form>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>