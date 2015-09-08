<?php 
$aspas = '"';

include "class/cabecalho.class.php";

$cabecalho = new  CamposCabecalhoNFe;


echo $cabecalho->xmlversion = "<?xml version=$aspas" . "1.0$aspas" . " encoding=$aspas" . "UTF-8$aspas" . "?>";
echo $cabecalho->nfeProcversao = "<nfeProc versao=$aspas" . "2.00$aspas" . " xmlns=$aspas" . "http://www.portalfiscal.inf.br/nfe$aspas" . ">";
echo $cabecalho->NFexmlns = "<NFe xmlns=$aspas" . "http://www.portalfiscal.inf.br/nfe$aspas" . "><infNFe versao=$aspas" . "2.00$aspas";
echo $cabecalho->id = " Id=$aspas" . "NFe11101284613439000180550010000004881093997017$aspas" . ">"; 

?>
