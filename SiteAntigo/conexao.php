<?php

$servidor = "dbmy0015.whservidor.com";
$usuario = "roldaomour";
$senha = "12cancao";
$conexao = mysql_connect($servidor,$usuario,$senha);
$banco = "roldaomour";
mysql_select_db($banco,$conexao);

?>