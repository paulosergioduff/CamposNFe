<?php
include "cabecalho.php";

?>

<html>
<head>
<meta charset="UTF-8">
	<title></title>
</head>
<body>
<hr>
<h1>Exemplo de obtenção de CampoNFe</h1>
<form action="gerarXML.php" method="POST">

	<select name="pagina">
		<option value"nfe-teste.xml">nfe-teste.xml</option>
	</select><br>

<select name="funcao">

	<option value="Update">Atualizar</option>
	<option value="Apagar">Apagar</option>
	<option value="LeLinha">LeLinha</option>
	<option value="EscreveNoFinal">EscreveNoFinal</option>
	<option value="EscreveNoFinal">EscreNoInicio</option>

</select>

	<p><textarea rows="4" cols="50" name="conteudo">
<?php 
echo $cabecalho->xmlversion;// Exemplo de obtenção de campo!
 ?>

</textarea>
<p><input type="submit" value="Enviar comando">
</form>
<p>Resultado:<br>
<textarea>
	
	<?php if (file_exists('nfe-teste.xml')) { include "nfe-teste.xml"; }; ?>
</textarea>
