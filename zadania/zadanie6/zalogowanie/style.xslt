<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version='1.1' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'
  xmlns:xs="http://www.w3.org/2001/XMLSchema">
<xsl:template match="/">

  <html>
    <head>
      <title>Zadanie 6</title>
      <style type="text/css">
        body
        {
        background-color:#6a6a6a;
        }
        main
        {
        font-family: Verdana, Helvetica, Arial;
        font-size:16px;
        margin:auto;
        position:relative;
        background-image:url("faktura.jpg");
        height:900px;
        width:1325px;
        background-size:cover;
        }

        #sprzedawca
        {
        word-wrap:break-word;
        line-height:33px;
        position:absolute;
        left:145px;
        top:47px;
        width:350px;
        height:130px;
        overflow: hidden;
        }
        #sprzedawca::first-line
        {
        text-indent:110px
        }

        #nabywca
        {
        word-wrap:break-word;
        line-height:33px;
        position:absolute;
        left:885px;
        top:47px;
        width:350px;
        height:130px;
        overflow: hidden;
        }
        #nabywca::first-line
        {
        text-indent:85px
        }

        #miejscowosc
        {
        font-size:14px;
        position:absolute;
        top:186px;
        left:600px;
        width:260px;
        overflow:hidden;
        white-space:nowrap;
        text-overflow:ellipsis
        }

        #dataWystawienia
        {
        font-size:13px;
        position:absolute;
        top:214px;
        left:628px;
        width:232px;
        overflow:hidden;
        white-space:nowrap;
        text-overflow:ellipsis
        }

        #nrRachunkuBanku
        {
        position:absolute;
        left:292px;
        width:520px;
        top:286px;
        font-size:18px;
        }

        #obiektyFaktury
        {
        position:absolute;
        top:394px;
        left:131px;
        width:1118px;

        }
        #obiektyFaktury .cell
        {
        font-size:18px;
        height:25.1px;
        padding-top:3px;
        float:left;
        overflow:hidden;
        white-space:nowrap;
        text-overflow:ellipsis
        }
        .nr
        {
        width:45px;
        text-align:center;
        }
        .nazwaTowaru
        {
        width:506px;
        }
        .jednostkaMiary
        {
        width:61px;
        text-align:center;
        }
        .iloscTowaru
        {
        width:212px;
        text-align:center;
        }
        .zloty
        {
        width:98px;
        text-align:right;
        padding-right:5px;
        }
        .grosze
        {
        width:39px;
        text-align:right;
        padding-right:5px;
        }

        #naleznosc
        {
        position:absolute;
        top:595px;
        left:1104px;
        width:150px;
        }
        #naleznosc .cell
        {
        font-size:24px;
        height:34px;
        padding-top:3px;
        float:left;
        }
      </style>
    </head>
    <body>
      <main>
        <div id="sprzedawca">
          <xsl:value-of select="obiekt/sprzedawca/osoba/imie"/>
          <xsl:text> </xsl:text>
          <xsl:value-of select="obiekt/sprzedawca/osoba/nazwisko"/>
        </div>
        <div id="nabywca">
          <xsl:value-of select="obiekt/nabywca/osoba/imie"/>
          <xsl:text> </xsl:text>
          <xsl:value-of select="obiekt/nabywca/osoba/nazwisko"/>
        </div>
        <div id="miejscowosc">
          <xsl:value-of select="obiekt/miejscowosc"/>
        </div>
        <div id="dataWystawienia">
          <xsl:value-of select="obiekt/dataWystawienia"/>
        </div>
        <div id="nrRachunkuBanku">
          <xsl:value-of select="obiekt/nrRachunkuBanku"/>
        </div>
        <div id="obiektyFaktury">
          <xsl:for-each select="obiekt/obiektyFaktury/pozycja">
          <div class="row">
            <div class="nr cell"><xsl:value-of select="nr"/></div>
            <div class="nazwaTowaru cell"><xsl:value-of select="nazwaTowaru"/></div>
            <div class="jednostkaMiary cell"><xsl:value-of select="jednostkaMiary"/></div>
            <div class="iloscTowaru cell"><xsl:value-of select="iloscTowaru"/></div>
            <div class="cenaJednostkowa cell">
                  <div class="zloty cell"><xsl:value-of select="cenaJednostkowa/zloty"/></div>
                  <div class="grosze cell"><xsl:value-of select="cenaJednostkowa/grosze"/></div>
            </div>
            <div class="wartoscTowarow cell">

                  <div class="zloty cell"><xsl:value-of select="wartoscTowarow/zloty"/></div>
                  <div class="grosze cell"><xsl:value-of select="wartoscTowarow/grosze"/></div>
            </div>
          </div>
          </xsl:for-each>
        </div>
        <div id="naleznosc">
          <div class="zloty cell"><xsl:value-of select="sum(obiekt/obiektyFaktury/pozycja/wartoscTowarow/zloty) + floor(sum(obiekt/obiektyFaktury/pozycja/wartoscTowarow/grosze) div 100)"/></div>
          <div class="grosze cell"><xsl:value-of select="sum(obiekt/obiektyFaktury/pozycja/wartoscTowarow/grosze) mod 100"/></div>
      </div>
      </main>
    </body>
  </html>

</xsl:template>
</xsl:stylesheet>
