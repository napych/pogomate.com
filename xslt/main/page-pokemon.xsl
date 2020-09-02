<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon">
        <h1>
            <xsl:value-of select="@name"/>
        </h1>
        <xsl:if test="count(evolve/evolve)>0">
            <div class="evolutions">
                <xsl:text>Evolutions: </xsl:text>
                <xsl:apply-templates select="evolve"/>
            </div>
            <hr/>
        </xsl:if>
        <xsl:choose>
            <xsl:when test="count(pokemon)&gt;0">
                <xsl:apply-templates select="pokemon" mode="reasons"/>
            </xsl:when>
            <xsl:otherwise>
                <p>No usages found for this pokemon.</p>
            </xsl:otherwise>
        </xsl:choose>
        <hr/>
        <h2>Pokémon search</h2>
        <xsl:call-template name="snippet-search"/>
    </xsl:template>

    <xsl:template match="pokemon" mode="reasons">
        <xsl:if test="count(../pokemon)&gt;1">
            <h2>
                <xsl:value-of select="@name"/>
            </h2>
        </xsl:if>
        <xsl:for-each select="reason">
            <xsl:sort select="evolve/@code" data-type="number"/>
            <p>
                <xsl:if test="evolve">
                    <xsl:text> ⇨ </xsl:text>
                    <a href="/pokemon/{evolve/@link}">
                        <xsl:value-of select="evolve/@name"/>
                    </a>
                    <xsl:text> </xsl:text>
                </xsl:if>
                <xsl:value-of select="@list"/>
                <xsl:if test="@subList!=''">
                    <xsl:text>: </xsl:text>
                    <xsl:value-of select="@subList"/>
                </xsl:if>
            </p>
        </xsl:for-each>
    </xsl:template>

    <xsl:template match="evolve">
        <span class="pokemon">
            <xsl:choose>
                <xsl:when test="@current=1">
                    <span>
                        <xsl:value-of select="@shortName"/>
                    </span>
                </xsl:when>
                <xsl:otherwise>
                    <a href="/pokemon/{@link}">
                        <xsl:value-of select="@shortName"/>
                    </a>
                </xsl:otherwise>
            </xsl:choose>
            <xsl:if test="count(evolve)>0">
                <xsl:text> ⇨ </xsl:text>
            </xsl:if>
            <span class="next">
                <xsl:apply-templates select="evolve"/>
            </span>
        </span>
    </xsl:template>
</xsl:stylesheet>