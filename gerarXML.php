<?php error_reporting(0);

include "class/woop.class.php";
include "main.php";


echo "<hr>";

$_POST['funcao'];

	$criarpagina = new criarpagina; /* A função de usar classes e objetos ao invés de variáveis estruturais
	tem mais a ver com didática e organização do código*/

	$criarpagina->pagina = 'nfe-teste.xml';
	$criarpagina->conteudo = $_POST['conteudo'];
	$criarpagina->$app();
	echo "<p>Resultado:<br>
	<textarea rows='4' cols='50'>";
	include "nfe-teste.xml";
	echo "</textarea><br>";
	
?> 




