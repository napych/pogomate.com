<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-move">
        <xsl:apply-templates select="move" mode="page-move"/>
    </xsl:template>

    <xsl:template match="move" mode="page-move">
        <h2>
            <xsl:value-of select="@name"/>
        </h2>
        <xsl:choose>
            <xsl:when test="@class='fast'">
                <p>Fast move</p>
            </xsl:when>
            <xsl:when test="@class='charge'">
                <p>Charge move</p>
            </xsl:when>
        </xsl:choose>
        <xsl:if test="@type">
            <p>
                <xsl:text>Type: </xsl:text>
                <span class="type-{@type}">
                    <xsl:value-of select="@type"/>
                </span>
            </p>
        </xsl:if>
        <xsl:if test="@power or @energy">
            <p>
                <xsl:text>Power: </xsl:text>
                <xsl:value-of select="@power"/>
                <br/>
                <xsl:text>Energy: </xsl:text>
                <xsl:value-of select="@energy"/>
            </p>
        </xsl:if>
        <xsl:if test="@pvpPower or @pvpEnergy">
            <p>
                <xsl:text>PVP power: </xsl:text>
                <xsl:value-of select="@pvpPower"/>
                <br/>
                <xsl:text>PVP energy: </xsl:text>
                <xsl:value-of select="@pvpEnergy"/>
            </p>
        </xsl:if>
        <xsl:if test="pokemon">
            <xsl:text>Available for: </xsl:text>
            <p class="move-users">
                <xsl:apply-templates select="pokemon" mode="page-move"/>
            </p>
        </xsl:if>
    </xsl:template>

    <xsl:template match="pokemon" mode="page-move">
        <a href="/pokemon/{@link}">
            <xsl:value-of select="@name"/>
        </a>
    </xsl:template>
</xsl:stylesheet>