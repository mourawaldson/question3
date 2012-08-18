<?php
require("utils/erro.php");
session_start();
require("utils/verificaSessao.php");
require("includes/topo.php")
?>
	
	<div id="latEsq">
<?php
if(!$_SESSION['usuario']['1'] == ""){
	echo '<p>Seja Bem Vindo <i>'.$_SESSION['usuario']['1'].'</i>  |  <a href="utils/deslogar.php">deslogar</a></p>';
}
?>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>