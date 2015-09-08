<?php     

class CamposAssinaturaNFe

                {

//public $assinatura; // '<Signature xmlns="http://www.w3.org/2000/09/xmldsig#"><SignedInfo><CanonicalizationMethod Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/><SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"/><Reference URI="#NFe11101284613439000180550010000004881093997017"><Transforms><Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature"/><Transform Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/></Transforms><DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/><DigestValue>DGTa0m6/dOui5S46nfHyqifBZ1U=</DigestValue></Reference></SignedInfo><SignatureValue>pSDFSfsSA2ZeXIGEybRqhs8wLze95RCxc6Ar3htLvWmDFtWcGRVygzTNa5JPsgRsl7mvKOg9CuRv+Csm/cmrr2GpsfjNl74XPC/8gjFSqObNJlVrrpCNFEV+fHHg4z3qTkgfhcN8uTsH8RRJ94INvYDfKaPBJOEVgN2JHEu4+Eo=</SignatureValue><KeyInfo><X509Data><X509Certificate>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</X509Certificate></X509Data></KeyInfo></Signature></NFe><protNFe versao="2.00"><infProt Id="ID311100000046263"><tpAmb>2</tpAmb><verAplic>SVRS20101126153318</verAplic><chNFe>11101284613439000180550010000004881093997017</chNFe><dhRecbto>2010-12-02T16:59:41</dhRecbto><nProt>311100000046263</nProt><digVal>DGTa0m6/dOui5S46nfHyqifBZ1U=</digVal><cStat>100</cStat><xMotivo>Autorizado o uso da NF-e</xMotivo></infProt></protNFe></nfeProc>';
      public $Signatureinicio; // "<Signature xmlns=$aspas" . "http://www.w3.org/2000/09/xmldsig#$aspas" . ">";
            public $SignedInfoinicio; // "<SignedInfo>";
                public $CanonicalizationMethodinicio; // "<CanonicalizationMethod Algorithm=$aspas" . "http://www.w3.org/TR/2001/REC-xml-c14n-20010315$aspas" . " />";
                public $SignatureMethodinicio; // "<SignatureMethod Algorithm=$aspas" . "http://www.w3.org/2000/09/xmldsig#rsa-sha1$aspas" . " />";
                public $Referenceinicio; // "<Reference URI=$aspas" . "#NFe11101284613439000180550010000004881093997017$aspas" . ">";
                    public $Transformsinicio1; // "<Transforms>";
                        public $Transformsinicio2; // "<Transform Algorithm=$aspas" . "http://www.w3.org/2000/09/xmldsig#enveloped-signature$aspas" . " />";
                        public $Transformsinicio3; // "<Transform Algorithm=$aspas" . "http://www.w3.org/TR/2001/REC-xml-c14n-20010315$aspas" . " />";
                    public $Transformsfim; // "</Transforms>";
                    public $DigestMethodinicio; // "<DigestMethod Algorithm=$aspas" . "http://www.w3.org/2000/09/xmldsig#sha1$aspas" . " />";
                   public $DigestValue; // "<DigestValue>DGTa0m6/dOui5S46nfHyqifBZ1U=</DigestValue>";
                public $Referencefim; // "</Reference>";
            public $SignedInfofim; // "</SignedInfo>";
            public $Signature; // "<SignatureValue>pSDFSfsSA2ZeXIGEybRqhs8wLze95RCxc6Ar3htLvWmDFtWcGRVygzTNa5JPsgRsl7mvKOg9CuRv+Csm/cmrr2GpsfjNl74XPC/8gjFSqObNJlVrrpCNFEV+fHHg4z3qTkgfhcN8uTsH8RRJ94INvYDfKaPBJOEVgN2JHEu4+Eo=</SignatureValue>";
            public $KeyInfoinicio; // "<KeyInfo>";
                public $X509Datainicio; // "<X509Data>";
                    public $X509Certificate; // "<X509Certificate>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</X509Certificate>";
               public $X509Datafim; // "</X509Data>";
            public $KeyInfofim; // "</KeyInfo>";
        public $Signaturefim; // "</Signature>";
    public $NFefim; // "</NFe>";
    public $protNFeinicio; // "<protNFe versao=$aspas" . "2.00$aspas" . ">";
        public $infProtinicio; // "<infProt Id=$aspas" . "ID311100000046263$aspas" . ">";
            public $tpAmb; // "<tpAmb>2</tpAmb>";
            public $verAplic; // "<verAplic>SVRS20101126153318</verAplic>";
            public $chNFe; // "<chNFe>11101284613439000180550010000004881093997017</chNFe>";
            public $dhRecbto; // "<dhRecbto>2010-12-02T16:59:41</dhRecbto>";
            public $nProt; // "<nProt>311100000046263</nProt>";
            public $digVal; // "<digVal>DGTa0m6/dOui5S46nfHyqifBZ1U=</digVal>";
            public $cStat; // "<cStat>100</cStat>";
            public $xMotivo; // "<xMotivo>Autorizado o uso da NF-e</xMotivo>";
        public $infProtfim; // "</infProt>";
    public $protNFefim; // "</protNFe>";
public $nfeProcfim; // "</nfeProc>";

}

?>
