<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-move">
        <xsl:apply-templates select="move" mode="page-move"/>
    </xsl:template>

    <xsl:template match="move" mode="page-move">
        <h2>
            <xsl:value-of select="@name"/>
        </h2>
    </xsl:template>
</xsl:stylesheet>