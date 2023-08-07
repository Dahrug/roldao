<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Victor Hugo Moura
Versão: 1.0.0
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Roldão Alves de Moura</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" /></head>

<script type='text/javascript'>
<!--

function FecharJanela()
{
ww = window.open(window.location, "_self");
window.opener.location.href='comentarios.php?id=1';
ww.close();
}
-->
</script>

<body onunload="window.opener.location.reload()">

<!-- end header -->
<div id="page">
	<div id="content">
		<div class="feature bg7">
<br>
			<h1 class="title">

   
	                      <?php
                              include ("conexao.php");
							  							  						 			                              
								session_start();
								$proxId = $_SESSION["idComentario"]+1;
								$nome = $_POST['nome'];
								$comentario = $_POST['comentario'];
								$ip = getenv("REMOTE_ADDR");
								$data = date('Y/m/d');
								$insere = "INSERT INTO Comentarios (idComent, nome,comentario, ip, data) VALUES ('$proxId', '$nome', '$comentario', '$ip', '$data')";
								
								if (chop($nome) != "" and chop($comentario) != ""){
									$resultado = mysql_query($insere);				
									echo "Comentário salvo com sucesso.";
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: roldaomoura@uol.com.br\r\n"; // remetente
$headers .= "Return-Path: roldaomoura@uol.com.br\r\n"; // return-path
$envio1 = mail("roldaomoura@uol.com.br", "Novo Comentário", $nome." deixou o seguinte comentário: ".$comentario." pelo IP ".$ip, $headers);
$envio2 = mail("victor.dahrug@gmail.com", "Novo Comentário", $nome." deixou o seguinte comentário: ".$comentario." pelo IP ".$ip, $headers);

                                                                }
								else {  
									echo "O comentário não foi salvo.<br/>Os dados foram preenchidos incorretamente."; 
									
								} 
								echo "<br/><br/>"; 
								echo "<input type=\"button\" value=\"Voltar para o Site\" style=\"width:50%;height:auto;border:1px solid #000;float:left;padding:4px;padding-left:10px;margin-top:4px;margin-bottom:4px;\" onclick=\"FecharJanela();\"/>"; 
								?>

</h1>
                             <div class="content">
 

<p>&nbsp;</p>
			</div>
		</div>
		</div>
	<!-- end content -->

<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->

<!-- end footer -->
</body>
</html>



