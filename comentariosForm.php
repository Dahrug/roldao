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

<script type="text/javascript" language="javascript">

document.form1[nome].focus();
 
function limita(campo){
var tamanho = document.form1[campo].value.length;
var tex=document.form1[campo].value;
if (tamanho>=500) {
document.form1[campo].value=tex.substring(0,500);
}
return true;
}
</script>

<body>

<!-- end header -->
<div id="page">
	<div id="content">
		<div class="feature bg7">
<br>
			<h1 class="title">

     </h1>
                             <div class="content">

                             <form name="form1" action="insereComentario.php", method='post' > 

	
	<h4><label>Nome: (Obrigatório)</label><br/>
	        <input type="text" name="nome"> </h4> 
	<h4><label>Comentário: (Máximo de 500 caracteres)</label><br/>
	        <!-- <input type="text" name="comentario" size="150" maxlength="500" style="height: 50px;"> -->
            <textarea name='comentario' rows="4" cols="40" style="overflow:auto" onkeydown="javascript:limita('comentario');"> </textarea> </h4>	         
	        
   <input type='submit', value='Enviar'> 	

</form>

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
