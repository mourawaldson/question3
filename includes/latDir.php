	<div id="latDir">
		<ul>
<?php
if(isset($_SESSION['usuario'])){echo '<li><a href="cadastroEnquete.php">Cadastrar Enquete</a></li>
<li><a href="listarEnquete.php">Listar Enquete</a></li>
<li><a href="cadastroSituacao.php">Cadastrar Situa&ccedil;&atilde;o</a></li>
<li><a href="listarSituacao.php">Listar Situa&ccedil;&otilde;es</a></li>';}
if($_SESSION['usuario']['1'] == 'root'){echo '<li><a href="listarUsuario.php?acao=usuarios">Listar Usu&aacute;rios</a></li>
<li><a href="listarUsuario.php?acao=usuariosLogados">Listar Usu&aacute;rios Online</a></li>';}
?>
		</ul>
	</div> <!-- /#latDir -->