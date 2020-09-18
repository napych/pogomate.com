<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon">
        <h1>
            <xsl:value-of select="@name"/>
        </h1>
<!--
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Usage</a>
                <xsl:apply-templates select="pokemon" mode="tabs-menu"/>
            </li>
        </ul>
-->
<!--        <h2 class="h3">Usage</h2>-->
        <xsl:apply-templates select="pokemon" mode="reasons"/>
        <xsl:apply-templates select="pokemon" mode="pokemon-info"/>
        <h2 class="h3">Pokémon search</h2>
        <xsl:call-template name="snippet-search"/>
    </xsl:template>

<!--
    <xsl:template match="pokemon" mode="tabs-menu">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <xsl:value-of select="@name"/>
            </a>
        </li>
    </xsl:template>
-->

    <xsl:template match="pokemon" mode="reasons">
        <xsl:if test="count(../pokemon)&gt;1">
<!--            <h3 class="h5">-->
            <h2 class="h3">
                <xsl:value-of select="@name"/>
            </h2>
<!--            </h3>-->
        </xsl:if>
        <xsl:if test="count(reason)&lt;1">
            <p>No known usages were found for this pokémon.</p>
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
            <xsl:call-template name="snippet-icon">
                <xsl:with-param name="name" select="@type"/>
                <xsl:with-param name="size" select="20"/>
            </xsl:call-template>
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
                        <xsl:value-of select="@name"/>
                    </span>
                </xsl:when>
                <xsl:otherwise>
                    <a href="/pokemon/{@link}">
                        <xsl:value-of select="@name"/>
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

    <xsl:template match="pokemon" mode="pokemon-info">
        <hr/>
        <h2 class="h3">
            <xsl:value-of select="@name"/>
            <xsl:text> info</xsl:text>
        </h2>
        <xsl:if test="count(evolve/evolve)>0">
            <p class="evolutions">
                <xsl:text>Evolutions: </xsl:text>
                <xsl:apply-templates select="evolve"/>
            </p>
        </xsl:if>
        <xsl:text>Pokedex ID: #</xsl:text>
        <xsl:value-of select="@pokedexId"/>
    </xsl:template>
</xsl:stylesheet>
