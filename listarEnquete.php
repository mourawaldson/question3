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
			<th>Título</th>
			<th>Pergunta</th>
			<th>Data de Início</th>
			<th>Data de Término</th>
			<th colspan="2">Op&ccedil;&otilde;es</th>
<?php

	$sqlEnquete = 'select * from enquete where idUsuario = '.$_SESSION['usuario']['0'];

	$rsEnquetes = mysql_query($sqlEnquete);
	while ($row = mysql_fetch_assoc($rsEnquetes)) {
		echo '
			<tr>
				<td>'.$row['titulo'].'</td>
				<td>'.$row['pergunta'].'</td>
				<td>'.formatarData2($row['dataIniVigencia']).'</td>
				<td>'.formatarData2($row['dataFimVigencia']).'</td>
				<td><a href="acoesEnquete.php?acao=excluir&id='.$row['id'].'">Excluir</a></td>
				<td><a href="alterarEnquete.php?id='.$row['id'].'">Alterar</a></td>
			</tr>';
	}
?>
		</table>
		<?php if($msg){echo $msg;}?>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>