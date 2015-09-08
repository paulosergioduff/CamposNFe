<?php 

include "class/woop.class.php";
//include "FormParaXMLexemplo.php";

$app = $_POST['funcao'];

	$criarpagina = new criarpagina; /* A função de usar classes e objetos ao invés de variáveis estruturais
	tem mais a ver com didática e organização do código*/

	$criarpagina->pagina = $_POST['pagina'];
	$criarpagina->conteudo = $_POST['conteudo'];
	//$criarpagina->arquivoalvo = ';
	$criarpagina->$app();	

?> 
<p>Resultado<br>
<textarea>
	<?php if (file_exists('nfe-teste.xml')) { include 'nfe-teste.xml';}; ?>
</textarea>
