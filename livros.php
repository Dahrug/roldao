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

<body>
	
	<!-- header starts here -->
	<div id="header-wrap"><div id="header-content">	
		
		<h1 id="logo"><a href="index.php" title="">Rold&atilde;o Alves <span class="orange">de Moura </span></a></h1>	
		<pre id="slogan">Seja Bem-Vindo ao Site de </pre>

		<!-- Menu Tabs -->
  <ul>
			<li><a href="index.php">In&Iacute;cio</a></li>
			<li><a href="livrosIntroducao.php" id="current">Livros</a></li>
			<li><a href="artigos.html">Artigos</a></li>
			<li><a href="palestras.html">Palestras</a></li>
			<li><a href="quadros.html">Galeria Virtual</a></li>
			<li><a href="contato.html">Contato</a></li>
			<li><a href="comentarios.php?id=0">Comentários</a></li>			
		</ul>					
	
	</div></div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap"><div id="content">	 
	
	<div id="main">	
    
    <?php				                            				  
                              include ("conexao.php");
	     		      		  $id = $_GET['id']; 
                              $consulta = "SELECT * FROM Livros WHERE id ='$id' " ;	
                              $nome = mysql_query($consulta);
                              $resultado = mysql_fetch_assoc($nome);                
  			     
				 echo "<div align=\"center\"><a name=\"TemplateInfo\"></a></div> <h1 align=\"center\"><em>".$resultado['Titulo']."</em></h1>"; 		  
				 echo "<p align=\"center\"><img src=\"livros/livro".$id.".jpg\" width=\"129\" height=\"200\" alt=\"firefox-gray\" class=\"float-left\" /></p>";
				 echo "<p align=\"justify\"><strong>Titulo</strong>:"." ".$resultado['Titulo']."<br/> </p>"; 		  				 
			     echo "<p align=\"justify\"><strong>Autor: </strong> "." ".$resultado['Autor']."<br /> </p>";
                 echo "<p align=\"justify\"><strong>P&aacute;ginas: </strong>"." ".$resultado['Paginas']."</p>";
                 echo "<p align=\"justify\"><strong>Acabamento: </strong>".$resultado['Acabamento']."</strong></p>";
                 echo "<p align=\"justify\"><strong>ISBN:</strong>"." ".$resultado['ISBN']."<br /></p>";
                 echo "<p align=\"justify\"><strong>Editora:</strong>"." ".$resultado['Editora']."<br /></p>";
      			 echo "<p align=\"justify\"><strong>Ano de publica&ccedil;&atilde;o:</strong>"." ".$resultado['Ano']."<br /></p>";
      			 echo "<p align=\"justify\"><strong>Categoria:</strong>"." ".$resultado['Categoria']."</p>";
      			 echo "<p align=\"justify\">&nbsp;</p>";
    			 echo "<p align=\"justify\">".$resultado['Resenha']."</p>";
      			 echo "<p align=\"justify\">&nbsp;</p>";
				  
                                if ( is_null($resultado['LinkCompra']) ) { echo ""; } else {
				 echo "<a href=".$resultado['LinkCompra']." target=\"resource window\" > <img src=\"images/comprar.gif\" alt=\"\" width=\"156\" height=\"51\" /></a> ";			 
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
