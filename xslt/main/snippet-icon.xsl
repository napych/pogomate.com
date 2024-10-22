<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template name="snippet-icon">
        <xsl:param name="name"/>
        <xsl:param name="size"/>
        <xsl:param name="type" select="@type"/>
        <img width="{$size}" height="{$size}" title="{$name}" alt="{$name}" class="icon icon-{$size} icon-{$name}">
            <xsl:attribute name="src">
                <xsl:text>/img/</xsl:text>
                <xsl:choose>
                    <xsl:when test="$name='Attack'">stat/attack.svg</xsl:when>
                    <xsl:when test="$name='Defense'">stat/defense.svg</xsl:when>
                    <xsl:when test="$name='Stamina'">stat/stamina.svg</xsl:when>
                    <xsl:when test="$type='PVE'">pokeball-special.svg</xsl:when>
                    <xsl:when test="$type='GL'">gl.svg</xsl:when>
                    <xsl:when test="$type='UL'">ul.svg</xsl:when>
                    <xsl:when test="$type='ML'">ml.svg</xsl:when>
                </xsl:choose>
            </xsl:attribute>
        </img>
    </xsl:template>
</xsl:stylesheet>
