<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta name="Description" content="Information architecture, Web Design, Web Standards." />
<meta name="Keywords" content="your, keywords" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Erwin Aligam - ealigam@gmail.com" />
<meta name="Robots" content="index,follow" />		

<link rel="stylesheet" href="images/EliteCircle.css" type="text/css" />

<title>Rold&atilde;o Alves de Moura</title>
	
<style type="text/css">
<!--
.style1 {color: #A4A4A4}
.style2 {color: #CCC}
#Layer1 {
	position:absolute;
	left:787px;
	top:62px;
	width:23px;
	height:20px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:804px;
	top:-1px;
	width:17px;
	height:20px;
	z-index:1;
	border-top-color: #190801;
	border-right-color: #190801;
	border-bottom-color: #190801;
	border-left-color: #190801;
	background-color: #190801;
}

.style4 {color: #CB4721}
.style5 {color: #FFFFFF}
.style6 {color: #F38D2E}
-->
</style>
</head>

	<script language="JavaScript">
function abrir(URL) {

  var width = 450;
  var height = 320;

  var left = 99;
  var top = 99;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}
</script>

<body>
	
	<!-- header starts here -->
	<div id="header-wrap"><div id="header-content">	
		
		<h1 id="logo"><a href="index.php" title="">Rold&atilde;o Alves <span class="orange">de Moura </span></a></h1>	
		<pre id="slogan">Seja Bem-Vindo ao Site de </pre>

		<!-- Menu Tabs -->
  <ul>
			<li><a href="index.php">In&Iacute;cio</a></li>
			<li><a href="livrosIntroducao.php">Livros</a></li>
			<li><a href="artigos.html">Artigos</a></li>
			<li><a href="palestras.html">Palestras</a></li>
			<li><a href="quadros.html">Pinturas a Óleo</a></li>
			<li><a href="contato.html">Contato</a></li>	
			<li><a href="comentarios.php?id=0" id="current">Comentários</a></li>		
		</ul>					
	
	</div></div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">	 
	
	<div id="main">	    

<a href="javascript:abrir('comentariosForm.php');"><strong>DEIXE SEU COMENTÁRIO</strong></a>

    <?php 
				     echo "<br/><br/>";
					 include ("conexao.php");
                     $idComentarioInicial = $_GET['id'];
                     $consultaQuantidadeTotal = "SELECT COUNT(*) as total FROM Comentarios";
					 $respostaQuantidade = mysql_query($consultaQuantidadeTotal);
					 $resultadoQuantidade = mysql_fetch_array($respostaQuantidade);
					 //$qntComents = $resultadoQuantidade["total"];
                                         $qntComents = 40;
					 $consultaQuantidade = $qntComents - $idComentarioInicial;
                     $consulta = "SELECT * FROM Comentarios WHERE idComent between ($consultaQuantidade-7) and $consultaQuantidade order by idComent desc" ;	
					 					 
					 session_start();
					 $_SESSION["idComentario"] = $qntComents;

					 $resposta = mysql_query($consulta);
					                      
                     while ($resultado = mysql_fetch_assoc($resposta)) {
					    echo "<p align=\"justify\"><strong>".$resultado['nome']."</strong>"." deixou a seguinte mensagem: <strong>".$resultado['comentario']."</strong> em ".date
						('d/m/Y', strtotime($resultado['data']))."</p>";
					    echo "<br/>"; } 					 
					  
					 if ($qntComents > $consultaQuantidade+7) //Há páginas anteriores
					 {
					 	$proxId = $idComentarioInicial-8;
					 	echo "<div style=\"width:12%;height:auto;border:1px solid #000;float:left;padding:4px;padding-left:40px;margin-top:4px;margin-bottom:4px;\"><a href=\"comentarios.php?id=$proxId\">ANTERIOR</a></div>";
					 } 	
					 if ($consultaQuantidade-7 > 0) //Há mais comentários a serem mostrados
					 {
					    $proxId = $idComentarioInicial+8;
					 	echo "<div style=\"width:12%;height:auto;border:1px solid #000;float:left;padding:4px;padding-left:40px;margin-top:4px;margin-bottom:4px;\"><a href=\"comentarios.php?id=$proxId\">PRÓXIMA</a></div>";
					 }                  
	?>	

    </div>		
	
		
		<!-- content-wrap ends here -->
    </div>
	</div>        

	<!-- footer starts here -->	
	<div id="footer-wrap"><div id="footer-content">
	  <div align="center">
		  <p>&nbsp;</p>
	    <p align="center"><span class="style2"><span title="174">&copy;</span>2010 - Desenvolvido por</span> <span class="orange style6">Diego Trevisan</span><span class="style4"> <span class="style5">e</span> <span class="orange style6">Victor Hugo</span> </span> - Todos os direitos reservados
	      <!-- footer ends here -->
	    </p>
	  </div>
	</div></div>
</body>
</html>