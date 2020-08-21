<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon">
        <h1>
            <xsl:value-of select="@name"/>
            <xsl:choose>
                <xsl:when test="count(pokemon)>1">
                    <xsl:apply-templates select="pokemon" mode="reasons"/>
                </xsl:when>
                <xsl:otherwise>
                    <p>No usages found for this pokemon.</p>
                </xsl:otherwise>
            </xsl:choose>
        </h1>
    </xsl:template>

    <xsl:template match="pokemon" mode="reasons">
        <h2>
            <xsl:text>#</xsl:text>
            <xsl:value-of select="@pokedexId"/>
            <xsl:text> </xsl:text>
            <xsl:value-of select="@name"/>
        </h2>
        <xsl:for-each select="reason">
            <p>
                <xsl:value-of select="@text"/>
            </p>
        </xsl:for-each>
    </xsl:template>
</xsl:stylesheet>