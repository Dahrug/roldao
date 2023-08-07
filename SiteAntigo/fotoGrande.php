<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
<title>Roldão Alves de Moura</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style2 {color: #000000}
-->
</style>
</head>

<body>
<?php include ("header.php"); ?>
</div>
</div>

<div id="wrap">

<div id="contents">
<div id="recententries">
<h2 align="center">&nbsp;</h2>
<p align="left" class="style4">Quadros</p>
<p align="center" class="postdata">&nbsp;</p>

</div>
<div id="previews">
  <?php				  echo"<h4><strong> <span class='style1'>";
                                  //era "<div class='numPagina'>";
				  
                              include ("conexao.php");
	     		      $foto = $_GET['idfoto']; 
                              $consulta = "SELECT * FROM Quadros WHERE id ='$foto' " ;	
                              $nome = mysql_query($consulta);
                              $resultado = mysql_fetch_assoc($nome);
                              if ($resultado['tamanho'] == "") {
                              echo ' " '.$resultado['nome'] .' " ' ." - " .$resultado['tamanho'] .$resultado['tipo'] ;
                              } else {
                              echo ' " '.$resultado['nome'] .' " ' ." - " .$resultado['tamanho'] ." cm" ." - ".$resultado['tipo'] ; }

                                  echo "</span><br/><br/>";
				  // era echo "</div>";
  
				  function paginaQuadros($idfoto)
				{
                               if ($idfoto < 16) {
									$id = 1; }
				
                               else {
							   
							   		if ($idfoto < 31) {
							   			$id = 16; } 
										
										else {
											  
											  if($idfoto < 46) {
											  		$id = 31; }
													
													else {
													
														if($idfoto < 61) {
											  				$id = 46; }
															
															else {
															
																if($idfoto < 76) {
											  						$id = 61; }
															
																else {
																
																	if($idfoto < 91) {
											  						  $id = 76; }
																	else {
																	
											  						  $id = 91; }
																	
																
																}
															
															}
													}
											
											 }
									}
									return $id;
				}

                 $totalFotos = 92;
	    		 echo "<img SRC=\"./quadros/$foto.jpg\" height='450' ";
                 echo "<br/><br/>";
 
 			     echo "<div class='botao'>";
				 $quadroAtual = $_GET['idfoto'];
				 if ($foto != 1) {
				    echo "<a href=\"http://www.roldaomoura.com/fotoGrande.php?idfoto=".($quadroAtual-1)."\"> ANTERIOR</a>"; }
				 	//echo "<input type=\"button\" onclick=\"anterior($foto);\" value=\"ANTERIOR\"\\>"; }
                 if ($foto != $totalFotos) {
                    echo "<a href=\"http://www.roldaomoura.com/fotoGrande.php?idfoto=".($quadroAtual+1)."\"> PRÓXIMO</a>"; }
					//echo "<input type=\"button\" onclick=\"proxima($foto);\" value=\"PRÓXIMO\"\\>"; }
				 $id = paginaQuadros($quadroAtual); 
				 echo "<a href=\"http://www.roldaomoura.com/quadros.php?quadros=".$id."\"> VOLTAR </a>";
                                 
                                 echo $_SESSION['id'];
				 echo "</div>"; 		  
				   ?>
  

  <div class="clear">
    <p>&nbsp;</p>

<br/>
  </div>
</div>

</div>
</div>



<?php include ("footer.php") ?>
</body>
</html>
