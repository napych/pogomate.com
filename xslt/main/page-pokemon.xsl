<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon">
        <h1>
            <xsl:value-of select="@name"/>
        </h1>
        <h2 class="h3">Usage</h2>
        <xsl:apply-templates select="pokemon" mode="reasons"/>
        <h2 class="h3">Information</h2>
        <xsl:call-template name="pokemon-accordion"/>
        <h2 class="h3">Pokémon search</h2>
        <xsl:call-template name="snippet-search"/>
    </xsl:template>

    <xsl:template match="pokemon" mode="reasons">
        <xsl:if test="count(../pokemon)&gt;1">
            <!--            <h3 class="h5">-->
            <h2 class="h3">
                <xsl:value-of select="@name"/>
            </h2>
            <!--            </h3>-->
        </xsl:if>
        <div class="evolution-reasons-list">
            <xsl:if test="count(reason)&lt;1">
                <p>No known usages were found for this pokémon.</p>
            </xsl:if>
            <xsl:if test="reason[not(evolve)]">
                <p class="reason-title">
                    <xsl:value-of select="@name"/>
                </p>
                <div class="reason-list">
                    <xsl:apply-templates select="reason[not(evolve)]" mode="pokemon"/>
                </div>
            </xsl:if>
            <xsl:for-each select="reason[evolve and not(evolve/@code=preceding-sibling::reason/evolve/@code)]">
                <xsl:sort select="evolve/@code" data-type="number"/>
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
                        <p class="reason-title"/>
                        <div class="reason-list">
                            <xsl:apply-templates select="../reason[not(evolve)]" mode="pokemon"/>
                        </div>
                    </xsl:otherwise>
                </xsl:choose>
            </xsl:for-each>
        </div>
        <xsl:if test="count(evolve/evolve)>0">
            <p class="evolutions">
                <xsl:text>Evolutions: </xsl:text>
                <xsl:apply-templates select="evolve"/>
            </p>
        </xsl:if>
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

    <xsl:template name="pokemon-accordion">
        <div class="accordion" id="pokemonInfo">
            <xsl:apply-templates select="pokemon" mode="pokemon-info"/>
        </div>
        <br/>
    </xsl:template>

    <xsl:template match="pokemon" mode="pokemon-info">
        <xsl:variable name="postfix" select="position()"/>
        <div class="card">
            <div class="card-header" id="name{$postfix}">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#form{$postfix}" aria-expanded="false"
                            aria-controls="form{$postfix}">
                        <xsl:value-of select="@name"/>
                    </button>
                </h2>
            </div>

            <div id="form{$postfix}" class="collapse" aria-labelledby="name{$postfix}" data-parent="#pokemonInfo">
                <div class="card-body">
                    <p class="card-pokedex-id">
                        <span class="label">
                            <xsl:text>Pokedex ID: #</xsl:text>
                        </span>
                        <span class="value">
                            <xsl:value-of select="@pokedexId"/>
                        </span>
                    </p>

                    <xsl:if test="@unreleased>0">
                        <p class="card-unreleased">Not released yet</p>
                    </xsl:if>

                    <p class="card-types">
                        <span class="label">
                            <xsl:text>Type: </xsl:text>
                        </span>
                        <span class="type-{@type1}">
                            <xsl:value-of select="@type1"/>
                        </span>
                        <xsl:text> </xsl:text>
                        <xsl:if test="@type2 != ''">
                            <span class="type-{@type2}">
                                <xsl:value-of select="@type2"/>
                            </span>
                        </xsl:if>
                    </p>

                    <xsl:if test="count(evolve/evolve)>0">
                        <p class="evolutions">
                            <xsl:text>Evolutions: </xsl:text>
                            <xsl:apply-templates select="evolve"/>
                        </p>
                    </xsl:if>
                </div>
            </div>
        </div>
    </xsl:template>
</xsl:stylesheet>
