<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template name="snippet-type">
        <xsl:param name="type"/>
        <xsl:param name="size"/>
        <img width="{$size}" height="{$size}" title="{$type}" alt="{$type}" class="snippet-type snippet-type-{$size} snippet-type-{$type}">
            <xsl:attribute name="src">
                <xsl:text>/img/type/</xsl:text>
                <xsl:value-of select="$type"/>
                <xsl:text>.svg</xsl:text>
            </xsl:attribute>
        </img>
    </xsl:template>
</xsl:stylesheet>
