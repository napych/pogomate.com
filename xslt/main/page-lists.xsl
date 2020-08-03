<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-lists">
        <h1>Lists</h1>
        <div class="alert alert-primary" role="alert">
            <xsl:text>To use a list, copy and paste it to the pokemon search string.</xsl:text>
        </div>

        <xsl:for-each select="list">
            <xsl:call-template name="snippet-string">
                <xsl:with-param name="name" select="@name"/>
                <xsl:with-param name="string" select="@string"/>
            </xsl:call-template>
        </xsl:for-each>
    </xsl:template>
</xsl:stylesheet>