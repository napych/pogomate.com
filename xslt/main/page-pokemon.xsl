<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon">
        <h1>
            <xsl:value-of select="@name"/>
        </h1>
        <xsl:choose>
            <xsl:when test="count(pokemon)&gt;0">
                <xsl:apply-templates select="pokemon" mode="reasons"/>
            </xsl:when>
            <xsl:otherwise>
                <p>No known usages were found for this pokémon.</p>
            </xsl:otherwise>
        </xsl:choose>
        <hr/>
        <p>
            <xsl:text>Pokedex ID: #</xsl:text>
            <xsl:value-of select="@pokedexId"/>
        </p>
        <xsl:if test="count(evolve/evolve)>0">
            <p class="evolutions">
                <xsl:text>Evolutions: </xsl:text>
                <xsl:apply-templates select="evolve"/>
            </p>
            <hr/>
        </xsl:if>
        <h2>Pokémon search</h2>
        <xsl:call-template name="snippet-search"/>
    </xsl:template>

    <xsl:template match="pokemon" mode="reasons">
        <xsl:if test="count(../pokemon)&gt;1 or @code!=@pokedexId">
            <h2>
                <xsl:value-of select="@name"/>
            </h2>
        </xsl:if>
        <xsl:if test="reason[not(evolve)]">
            <div class="evolution-reasons">
                <xsl:apply-templates select="reason[not(evolve)]" mode="pokemon"/>
            </div>
        </xsl:if>
        <xsl:for-each select="reason[evolve and not(evolve/@code=preceding-sibling::reason/evolve/@code)]">
            <xsl:sort select="evolve/@code" data-type="number"/>
            <div class="evolution-reasons">
                <xsl:choose>
                    <xsl:when test="evolve">
                        <p class="reason-title">
                            <xsl:text> ⇨ </xsl:text>
                            <a href="/pokemon/{evolve/@link}">
                                <xsl:value-of select="evolve/@name"/>
                            </a>
                        </p>
                        <div class="reason-list">
                            <xsl:variable name="code" select="evolve/@code"/>
                            <xsl:apply-templates select="../reason[evolve/@code=$code]" mode="pokemon"/>
                        </div>
                    </xsl:when>
                    <xsl:otherwise>
                        <xsl:apply-templates select="../reason[not(evolve)]" mode="pokemon"/>
                    </xsl:otherwise>
                </xsl:choose>
            </div>
        </xsl:for-each>
    </xsl:template>

    <xsl:template match="reason" mode="pokemon">
        <p>
            <img width="20" height="20" title="{@type}" alt="{@type}">
                <xsl:attribute name="src">
                    <xsl:text>/img/</xsl:text>
                    <xsl:choose>
                        <xsl:when test="@type='PVE'">pokeball-special.svg</xsl:when>
                        <xsl:when test="@type='GL'">gl.svg</xsl:when>
                        <xsl:when test="@type='UL'">ul.svg</xsl:when>
                        <xsl:when test="@type='ML'">ml.svg</xsl:when>
                    </xsl:choose>
                </xsl:attribute>
            </img>
            <xsl:text> </xsl:text>
            <xsl:value-of select="@list"/>
            <xsl:if test="@subList!=''">
                <xsl:text>: </xsl:text>
                <xsl:value-of select="@subList"/>
            </xsl:if>
        </p>
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
