<?php

include "class/totais.class.php";

$totais = new  CamposTotaisNFe;

echo $totais->totalinicio = "<total>";
                echo $totais->ICMSTotinicio = "<ICMSTot>";
                    echo $totais->vBC = "<vBC>0.00</vBC>";
                    echo $totais->vICMS = "<vICMS>0.00</vICMS>";
                    echo $totais->vBCST = "<vBCST>0.00</vBCST>";
                    echo $totais->vST = "<vST>0.00</vST>";
                    echo $totais->vProd = "<vProd>500.00</vProd>";
                    echo $totais->vFrete = "<vFrete>0.00</vFrete>";
                    echo $totais->vSeg = "<vSeg>0.00</vSeg>";
                    echo $totais->vDesc = "<vDesc>50.00</vDesc>";
                    echo $totais->vII = "<vII>0.00</vII>";
                    echo $totais->vIPI = "<vIPI>0.00</vIPI>";
                    echo $totais->vPIS = "<vPIS>0.00</vPIS>";
                    echo $totais->vCOFINS = "<vCOFINS>0.00</vCOFINS>";
                    echo $totais->vOutro = "<vOutro>0.00</vOutro>";
                    echo $totais->vNF = "<vNF>540.00</vNF>";
                echo $totais->ICMSTotfim = "</ICMSTot>";
                echo $totais->ISSQNtotinicio = "<ISSQNtot>";
                    echo $totais->vServ = "<vServ>90.00</vServ>";
                    echo $totais->vBC = "<vBC>90.00</vBC>";
                    echo $totais->vISS = "<vISS>4.50</vISS>";
                echo $totais->ISSQNtotfim = "</ISSQNtot>";
            echo $totais->totalfim = "</total>";
            echo $totais->transpinicio = "<transp>";
                echo $totais->modFrete = "<modFrete>0</modFrete>";
                echo $totais->vol = "<vol />";
            echo $totais->transpfim = "</transp>";
            echo $totais->cobrinicio = "<cobr>";
                echo $totais->fatinicio = "<fat>";
                    echo $totais->nFat = "<nFat>488</nFat>";
                    echo $totais->vOrig = "<vOrig>540.00</vOrig>";
                    echo $totais->vLiq = "<vLiq>540.00</vLiq>";
                echo $totais->fatfim = "</fat>";
                echo $totais->dupinicio = "<dup>";
                    echo $totais->nDup = "<nDup>00000488-01/01</nDup>";
                    echo $totais->dVenc = "<dVenc>2010-12-02</dVenc>";
                    echo $totais->vDup = "<vDup>540.00</vDup>";
                echo $totais->dupfim = "</dup>";
            echo $totais->cobrfim = "</cobr>";
            echo $totais->infAdicinicio = "<infAdic>";
                echo $totais->infCplinicio = "<infCpl>Pz -&gt; / / / / / / / / / / / (0000161);F.Pgto : 1-Dinheiro Vend : 1-WAGNER ARAGAO ;* Desconto em Produtos de ( 10,00000%) R$ 50,00 *;Mens CFOP : DESCONTO REFERENTE ISENCAO DE ICMS REF FULERAGEM DO GOVERNO ;*Substituicao Tributaria *;*Empresa Optante Simples Nacional*;Base ICMS= 540,00 Aliq ICMS= 3,50%=0,00</infCpl>";
            echo $totais->infAdicfim = "</infAdic>";
        echo $totais->infNFefim = "</infNFe>";

        ?>
