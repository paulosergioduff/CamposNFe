<?php
$aspas = '"';

include "class/det2.class.php";

$cabecalho = new  CamposDet2NFe;



    echo $det2->det2inicio = "<det nItem=$aspas" . "2$aspas" . ">";
                echo $det2->prodinicio = "<prod>";
                    echo $det2->cProd = "<cProd>MAO 0002</cProd>";
                    echo $det2->cEAN = "<cEAN />";
                    echo $det2->xProd = "<xProd>SERVICOS ELETRICOS-------------------------------</xProd>";
                    echo $det2->NCM = "<NCM>99999999</NCM>";
                    echo $det2->CFOP = "<CFOP>5933</CFOP>";
                    echo $det2->uCom = "<uCom>H</uCom>";
                    echo $det2->qCom = "<qCom>2.0000</qCom>";
                    echo $det2->vUnCom = "<vUnCom>45.0000000000</vUnCom>";
                    echo $det2->vProd = "<vProd>90.00</vProd>";
                    echo $det2->cEANTrib = "<cEANTrib />";
                    echo $det2->uTrib = "<uTrib>H</uTrib>";
                    echo $det2->qTrib = "<qTrib>2.0000</qTrib>";
                    echo $det2->vUnTrib = "<vUnTrib>45.0000000000</vUnTrib>";
                    echo $det2->indTot = "<indTot>0</indTot>";
                echo $det2->prodfim = "</prod>";
                echo $det2->impostoinicio = "<imposto>";
                    echo $det2->ISSQNinicio = "<ISSQN>";
                        echo $det2->vBC = "<vBC>90.00</vBC>";
                        echo $det2->vAliq = "<vAliq>5.00</vAliq>";
                        echo $det2->vISSQN = "<vISSQN>4.50</vISSQN>";
                        echo $det2->cMunFG = "<cMunFG>1100205</cMunFG>";
                        echo $det2->cListServ = "<cListServ>108</cListServ>";
                        echo $det2->cSitTrib = "<cSitTrib>N</cSitTrib>";
                    echo $det2->ISSQNfim = "</ISSQN>";
                    echo $det2->PISinicio = "<PIS>";
                        echo $det2->PISOutrinicio = "<PISOutr>";
                            echo $det2->CST = "<CST>99</CST>";
                            echo $det2->vBC = "<vBC>0.00</vBC>";
                            echo $det2->pPIS = "<pPIS>0.00</pPIS>";
                            echo $det2->vPIS = "<vPIS>0.00</vPIS>";
                        echo $det2->PISOutrfim = "</PISOutr>";
                    echo $det2->PISfim = "</PIS>";
                    echo $det2->COFINSinicio = "<COFINS>";
                        echo $det2->COFINSOutrinicio = "<COFINSOutr>";
                            echo $det2->CST = "<CST>99</CST>";
                            echo $det2->vBC = "<vBC>0.00</vBC>";
                            echo $det2->pCOFINS = "<pCOFINS>0.00</pCOFINS>";
                            echo $det2->vCOFINS = "<vCOFINS>0.00</vCOFINS>";
                        echo $det2->COFINSOutrfim = "</COFINSOutr>";
                    echo $det2->COFINSfim = "</COFINS>";
                echo $det2->impostofim = "</imposto>";
            echo $det2->det2fim = "</det>";

            ?>
