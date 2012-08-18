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
			<th>Situa&ccedil;&atilde;o</th>
			<th colspan="2">Op&ccedil;&otilde;es</th>
<?php
	$sqlSit = 'select * from situacao';

	$rsSit = mysql_query($sqlSit);
	while ($row = mysql_fetch_assoc($rsSit)) {
		echo '
			<tr>
				<td>'.$row['nome'].'</td>
				<td><a href="acoesSituacao.php?acao=excluir&id='.$row['id'].'">Excluir</a></td>
				<td><a href="alterarSituacao.php?id='.$row['id'].'">Alterar</a></td>
			</tr>';
	}
?>
		</table>
		<?php if($msg){echo $msg;}?>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>