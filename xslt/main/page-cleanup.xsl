<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-cleanup">
        <h1>Cleanup list</h1>
        <div class="alert alert-primary" role="alert">
            <xsl:text>To use a list, copy and paste it to the pokemon search string.</xsl:text>
        </div>
        <div class="alert alert-warning" role="alert">
            <xsl:text>Ingame implementation of !alola and !galar filters are currently broken, some filters are disabled for now.</xsl:text>
        </div>
        <xsl:call-template name="snippet-string">
            <xsl:with-param name="name" select="''"/>
            <xsl:with-param name="string" select="@cleanup"/>
        </xsl:call-template>
    </xsl:template>
</xsl:stylesheet>