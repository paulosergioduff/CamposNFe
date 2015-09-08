<?php

include "main.php";

?>
<hr>
<center>
<h1>Demonstração de obtenção de CampoNFe</h1>

<form action="geraXML.php" method="POST">

	<p><textarea rows="4" cols="50" name="conteudo"><?php 
	
echo $cabecalho->xmlversion;

?></textarea>
<p><input type="submit" value="Enviar comando">
</form>
<p>Resultado:<br>
