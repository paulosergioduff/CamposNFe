
<?php 
include "class/det1.class.php";
/* teste */


$det1 = new  CamposDet1NFe;

 echo $det1->det1inicio = "<det nItem=$aspas" . "1$aspas" . ">";
                echo $det1->prodinicio = "<prod>";
                    echo $det1->cProd = "<cProd>7897393543541</cProd>";
                    echo $det1->cEAN = "<cEAN />"; // verificar este campo estranho!
                    echo $det1->xProd = "<xProd>PAPEL SUPERLINHO 180 GRS 100 FLS AZUL-------------</xProd>";
                    echo $det1->NCM = "<NCM>99999999</NCM>";
                    echo $det1->CFOP = "<CFOP>5405</CFOP>";
                    echo $det1->uCom = "<uCom>UN</uCom>";
                    echo $det1->qCom = "<qCom>10.0000</qCom>";
                    echo $det1->vUnCom = "<vUnCom>50.0000000000</vUnCom>";
                    echo $det1->vProd = "<vProd>500.00</vProd>";
                    echo $det1->cEANTrib = "<cEANTrib />";
                    echo $det1->uTrib = "<uTrib>UN</uTrib>";
                    echo $det1->qTrib = "<qTrib>10.0000</qTrib>";
                    echo $det1->vUnTrib = "<vUnTrib>50.0000000000</vUnTrib>";
                    echo $det1->vDesc = "<vDesc>50.00</vDesc>";
                    echo $det1->indTot = "<indTot>1</indTot>";
                echo $det1->prodfim = "</prod>";
                echo $det1->impostoinicio = "<imposto>";
                    echo $det1->ICMSinico= "<ICMS>";
                        echo $det1->ICMSSN500incio = "<ICMSSN500>";
                            echo $det1->orig = "<orig>0</orig>";
                            echo $det1->CSOSN = "<CSOSN>500</CSOSN>";
                            echo $det1->vBCSTRet = "<vBCSTRet>0.00</vBCSTRet>";
                            echo $det1->vICMSSTRet = "<vICMSSTRet>0.00</vICMSSTRet>";
                       echo $det1->ICMSSTRetfim = "</ICMSSN500>";
                  echo $det1->ICMSfim = "</ICMS>";
                    echo $det1->PISinicio = "<PIS>";
                    echo $det1->PISoutrinicio = "<PISOutr>";
                            echo $det1->CSTPIS = "<CST>99</CST>";
                            echo $det1->vBCPIS = "<vBC>0.00</vBC>";
                            echo $det1->pPIS = "<pPIS>0.00</pPIS>";
                            echo $det1->vPIS = "<vPIS>0.00</vPIS>";
                        echo $det1->PISoutrfim = "</PISOutr>";
                   echo $det1->PISfim = "</PIS>";
                    echo $det1->COFINSinicio = "<COFINS>";
                        echo $det1->COFINSOutrinicio = "<COFINSOutr>";
                            echo $det1->CST = "<CST>99</CST>";
                            echo $det1->vBC = "<vBC>0.00</vBC>";
                            echo $det1->pCOFINS = "<pCOFINS>0.00</pCOFINS>";
                            echo $det1->vCOFINS = "<vCOFINS>0.00</vCOFINS>";
                        echo $det1->COFINSOutrfim = "</COFINSOutr>";
                    echo $det1->COFINSfim = "</COFINS>";
                echo $det1->impostofim = "</imposto>";
            echo $det1->det1fim = "</det>";

            ?>
