<?php error_reporting(0);

include "class/woop.class.php";
include "main.php";

echo "<hr>";

$app = 'Update';

	$criarpagina = new criarpagina; /* A função de usar classes e objetos ao invés de variáveis estruturais
	tem mais a ver com didática e organização do código*/

	$criarpagina->pagina = 'nfe-teste.xml';
	$criarpagina->conteudo = 'Conteudo novo criado!';
	//$criarpagina->arquivoalvo = ';
	$criarpagina->$app();
	echo "<p>Resultado:<br>"; include "meuarquivo.txt";
	//$criarpagina->imprimeXML();

?> 
