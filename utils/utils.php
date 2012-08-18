<?php

function dateFormatMySql ($data) {
   return (substr($data,6,4)."-".substr($data,3,2)."-".substr($data,0,2));
}

function pagina(){
	return end(explode("/",$_SERVER['PHP_SELF']));
}

function verificaExistencia($login,$senha){
	$sql = mysql_query("select * from usuario where login = '".$login."' and senha = '".$senha."'");
	return $rs = mysql_num_rows($sql);
}

function dadosUsuario($login,$senha){
	$sql = mysql_query("select * from usuario where login = '".$login."' and senha = '".$senha."'");
	return mysql_fetch_array($sql,MYSQL_ASSOC);
}

function formatarData($data){
	return substr($data,8,2).'/'.substr($data,5,2).'/'.substr($data,0,4).' - '.substr($data,11,8);
}

function formatarData2($data){
	return substr($data,8,2).'/'.substr($data,5,2).'/'.substr($data,0,4);
}
?>