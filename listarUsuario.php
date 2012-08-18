<?php
require("utils/erro.php");
session_start();
$acao = $_REQUEST['acao'];
if($_REQUEST['msg']){
	$msg = $_REQUEST['msg'];
}
require("utils/verificaSessao.php");
require("utils/conexao.php");
require("includes/topo.php");
?>
	
	<div id="latEsq">
		<table>
			<th>Usu&aacute;rio</th>
			<th>Login</th>
			<th>E-mail</th>
<?php if($acao == 'usuariosLogados'){echo '<th>Data Hora</th>';}else{echo '<th colspan="2">Op&ccedil;&otilde;es</th>';} ?>
<?php

	if($acao == 'usuarios'){
		$sqlUsuarios = 'select * from usuario';
	}else if($acao == 'usuariosLogados'){
		$sqlUsuarios = 'select * from usuario u, usuariologado ul where ul.idUsuario = u.id';
	}

	$rsUsuarios = mysql_query($sqlUsuarios);
	while ($row = mysql_fetch_assoc($rsUsuarios)) {
		echo '
			<tr>
				<td>'.$row['nome'].'</td>
				<td>'.$row['login'].'</td>
				<td>'.$row['email'].'</td>';
				if($acao == 'usuariosLogados'){echo '<td>'.formatarData($row['dataHora']).'</td></tr>';}else{
				echo '<td><a href="acoesUsuario.php?acao=excluir&id='.$row['id'].'">Excluir</a></td>
				<td><a href="alterarUsuario.php?id='.$row['id'].'">Alterar</a></td>
			</tr>';}
	}
?>
		</table>
		<?php if($msg){echo $msg;}?>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>