<?php
require("utils/utils.php");
$pagina = pagina();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>3ª Questão</title>
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen" />
	<?php if($pagina = 'cadastroUsuario.php'){echo '<script>
		function checa(nform) {
			if (nform.nome.value == "") {
				alert("Informe seu nome.");
				nform.nome.focus();
				nform.nome.select();
				return false;
			}
			if (nform.email.value == "") {
				alert("Informe seu e-mail.");
				nform.email.focus();
				nform.email.select();
				return false;
			} else {
				prim = nform.email.value.indexOf("@")
				if(prim < 2) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf("@",prim + 1) != -1) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf(".") < 1) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf(" ") != -1) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf(".@") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf("@.") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf(".com.br.") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf("/") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf("[") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf("]") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf("(") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf(")") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
				if(nform.email.value.indexOf("..") > 0) {
					alert("O e-mail informado parece não estar correto.");
					nform.email.focus();
					nform.email.select();
					return false;
				}
			}
			if (nform.login.value == "") {
				alert("Informe seu login.");
				nform.login.focus();
				nform.login.select();
				return false;
			}
			if (nform.senha.value == "") {
				alert("Informe sua senha.");
				nform.senha.focus();
				nform.senha.select();
				return false;
			}else{
				return true;
			}
		}
	</script>';
	}else if($pagina == 'cadastroSituacao.php' || $pagina == 'alterarSituacao.php'){
		echo '<script>
		function checa(nform) {
			if (nform.nome.value == "") {
				alert("Informe o nome.");
				nform.nome.focus();
				nform.nome.select();
				return false;
			}else{
				return true;
			}
		}
	</script>';
	}else if($pagina == 'cadastroEnquete.php'){
		echo '<script>
		function checa(nform) {
			if (nform.titulo.value == "") {
				alert("Informe o titulo.");
				nform.titulo.focus();
				nform.titulo.select();
				return false;
			}
			if (nform.pergunta.value == "") {
				alert("Informe a pergunta.");
				nform.pergunta.focus();
				nform.pergunta.select();
				return false;
			}
			if (nform.dataini.value == "") {
				alert("Informe a data inicio vigencia.");
				nform.dataini.focus();
				nform.dataini.select();
				return false;
			}
			if (nform.datafim.value == "") {
				alert("Informe a data fim vigencia.");
				nform.datafim.focus();
				nform.datafim.select();
				return false;
			}else{
				return true;
			}
		}
	</script>';
	}
?>
</head>

<body>

	<div id="topo">
		<ul>
			<li><a href="principal.php">P&aacute;gina Principal</a></li>
			<li><a href="cadastroUsuario.php">Cadastrar Usu&aacute;rio</a></li>
		</ul>
	</div>