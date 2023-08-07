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
.style1 {
	color: #A4A4A4;
	font-size: 15px;
}
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
#header-wrap #header-content #header-links #header-links .laranja {
	font-size: 15%;
}
.teste {
	font-size: 200%;
}
.teste {
	color: #F3A251;
}
-->
</style>
</head>

<body>
	
	<!-- header starts here -->
	<div id="header-wrap"><div id="header-content">	
		
		<h1 id="logo"><a href="index.php" title="">Rold&atilde;o Alves <span class="orange">de Moura </span></a></h1>	
		<h2 id="slogan">Seja Bem-Vindo ao Site de </h2>		
		
		<div id="header-links">
			<p id="header-links"><span class="style1">N&uacute;mero de acessos:</span> <span class="teste"> 

<?php
		
		$arquivo = "contador.txt";
		$file = fopen($arquivo,"r+");
		$atual = fread($file, filesize($arquivo));
                $contador = $atual + 1;
                echo $contador;
                fseek($file, 0);
                fwrite($file, $contador);
                fclose($file);                 
		
?>
 </span></p>		
</div>
		
		<!-- Menu Tabs -->
		<ul>
			<li><a href="index.php" id="current">In&Iacute;cio</a></li>
			<li><a href="livrosIntroducao.php">Livros</a></li>
			<li><a href="artigos.html">Artigos</a></li>
			<li><a href="palestras.html">Palestras</a></li>
			<li><a href="quadros.html">Galeria Virtual</a></li>
			<li><a href="contato.html">Contato</a></li>
			<li><a href="comentarios.php?id=0">Coment&aacute;rios</a></li>                        			
		</ul>					
	
	</div></div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">	 
	
	<div id="main">		
		
			<div align="center"><a name="TemplateInfo"></a>				
	  </div>
			<h1 align="center"><em>Biografia</em></h1>
			
			<p align="justify"><a href="index.php"><img src="images/Roldaonova.jpg" width="174" height="238" alt="firefox-gray"  class="float-left" /></a>
	  <strong> Rold&atilde;o Alves de Moura</strong>, nascido na     cidade de Nova   Esperan&ccedil;a, Paran&aacute;, &eacute; graduado   em Direito pela     Universidade   Estadual de Maring&aacute; (UEM) e em Ci&ecirc;ncias,   com habilita&ccedil;&atilde;o   em   Matem&aacute;tica, pela Faculdade de Filosofia, Ci&ecirc;ncias e   Letras de     Mandaguari (FAFIMAN), Mestre em Direitos Difusos e Coletivos   (Direito       Ambiental) e  Doutorando em Direito do Consumidor, pela     Universidade     Metropolitana de Santos (UNIMES). &Eacute; tamb&eacute;m especialista     em Economia   e Gest&atilde;o das Rela&ccedil;&otilde;es do Trabalho, pela PUC-SP.</p>  

			<p align="justify" text-align:justify="">&Eacute;   p&oacute;s-graduado, ainda, em     Direito Civil e Direito Processual Civil pelo   Instituto Brasileiro de     Estudos e Pesquisas S&oacute;cio-Econ&ocirc;micos(INBRAPE-PR)   e em Direito     Tribut&aacute;rio, pela Universidade S&atilde;o Francisco (USF-SP). <br />
                <br />
			  Advogado aposentado do Banco do Brasil e militando no ABC Paulista, foi professor de F&iacute;sica e Matem&aacute;tica, no Ensino M&eacute;dio, no Estado do Paran&aacute;, e professor de Direito Comercial na Universidade Paulista - UNIP, no campus Vergueiro - Capital - SP, durante 7 anos. <br />
  <br />
  &Eacute; professor de Direito Empresarial, Media&ccedil;&atilde;o e Arbitragem, Rela&ccedil;&otilde;es       Jur&iacute;dicas de Consumo e Pr&aacute;tica Jur&iacute;dica na Universidade Nove de Julho -       UNINOVE-SP, desde 2001. <br />
  <br />
			  Tem proferido palestras nos estados de     S&atilde;o Paulo, Mato Grosso     do Sul e Paran&aacute;, abordando o tema &quot;&Eacute;tica nas   Organiza&ccedil;&otilde;es,     Responsabilidade Social e Qualidade de Vida no Meio   Ambiente do     Trabalho&quot;. <br />
  <br />
  &Eacute; professor convidado do Centro Universit&aacute;rio de Maring&aacute; &ndash; PR &ndash;       CESUMAR, desde 2001, onde ministra aulas de &Eacute;tica e Responsabilidade       Social para p&oacute;s-gradua&ccedil;&atilde;o nos cursos de MBA - Executivo, MBA - Recursos       Humanos e MBA &ndash; Marketing. <br />
  <br />
  &Eacute; membro do Tribunal Arbitral da C&acirc;mara de Com&eacute;rcio do Mercosul. <a href="http://www.ccmercosul.org.br/vs2/index_bra.php?menu=50&etapa=02&id_categoria=23" target="resource window" title="Site do Tribunal"> Site do Tribunal </a> <br />
  <br />
  &Eacute; membro da Comiss&atilde;o de Direito da Crian&ccedil;a e do Adolescente. <a href="http://www2.oabsp.org.br/asp/comissoes/comissao.asp?id_comissao=84" target="resource window" title="Site da Comiss&atilde;o"> Site da Comiss&atilde;o </a> <br />
  <br />
  &Eacute; Associado da APBA - Associa&ccedil;&atilde;o Paulista de Belas Artes - SP. <a href="http://www.apba.com.br/" target="resource window" title="Site da APBA"> Site da APBA </a> <br />
  <br /> </p>
			<p>&nbsp;</p>
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
