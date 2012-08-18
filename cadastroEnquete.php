<?php
require("utils/erro.php");
session_start();
if($_REQUEST['msg']){
	$msg = $_REQUEST['msg'];
}
require("utils/conexao.php");
require("includes/topo.php");
?>
	
	<div id="latEsq">
		<form id="frmLogin" action="acoesEnquete.php?acao=incluir" onSubmit="return checa(this);" method="post">
			<label>Titulo:
			<input type="text" name="titulo" /></label>
			<label>Pergunta:
			<input type="text" name="pergunta" /></label>
			<label>Data Início Vigência:
			<input type="text" name="dataini" /></label>
			<label>Data Fim Vigência:
			<input type="text" name="datafim" /></label>
			<label>Situa&ccedil;ao
			<select name="idsituacao">
<?php
	$sqlSituacoes = 'select * from situacao';
	$rsSituacoes = mysql_query($sqlSituacoes);
	while ($row = mysql_fetch_assoc($rsSituacoes)) {
		echo '
			<option value="'.$row['id'].'">'.$row['nome'].'</option>
		';
	}
?>
			</select></label><br />
			<input type="hidden" name="idusuario" value="<?php echo $_SESSION['usuario']['0']; ?>" />
			<input type="submit" value="Cadastrar" /><br />
			<?php if($msg){echo $msg;}?>
		</form>
	</div>

<?php include("includes/latDir.php"); ?>

<?php require("includes/rodape.php"); ?>