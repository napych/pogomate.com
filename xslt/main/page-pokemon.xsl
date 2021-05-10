<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon">
        <h1>
            <xsl:value-of select="@name"/>
        </h1>
        <h2 class="h3">Usage</h2>
        <xsl:apply-templates select="pokemon" mode="reasons"/>
        <xsl:apply-templates select="pokemon" mode="pokemon-info"/>
        <xsl:call-template name="snippet-search"/>
    </xsl:template>

    <xsl:template match="pokemon" mode="reasons">
        <xsl:if test="count(../pokemon)&gt;1">
            <h3 class="h5">
                <xsl:value-of select="@name"/>
                <xsl:text> </xsl:text>
                <a>
                    <xsl:attribute name="href">
                        <xsl:text>#</xsl:text>
                        <xsl:value-of select="@form"/>
                    </xsl:attribute>
                    <small>↓</small>
                </a>
            </h3>
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
                            <a href="/pokemon/{evolve/@linkForm}">
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
                    <a href="/pokemon/{@linkForm}">
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
        <h2 class="h3" id="{@form}">
            <xsl:value-of select="@name"/>
        </h2>
        <!-- Info bar -->
        <div class="pokemon-info">
            <div class="pokemon-info-bar">
                <!-- Pokedex ID -->
                <span class="pokemon-id">
                    <xsl:text>#</xsl:text>
                    <xsl:value-of select="@pokedexId"/>
                </span>
                <!-- Types -->
                <span class="pokemon-types">
                    <xsl:call-template name="snippet-type">
                        <xsl:with-param name="size" select="16"/>
                        <xsl:with-param name="type" select="@type1"/>
                    </xsl:call-template>
                    <xsl:if test="@type2 != ''">
                        <xsl:call-template name="snippet-type">
                            <xsl:with-param name="size" select="16"/>
                            <xsl:with-param name="type" select="@type2"/>
                        </xsl:call-template>
                    </xsl:if>
                </span>

                <!-- Stats -->
                <xsl:if test="@attack != ''">
                    <span class="pokemon-stats">
                        <xsl:call-template name="snippet-icon">
                            <xsl:with-param name="name" select="'Attack'"/>
                            <xsl:with-param name="size" select="16"/>
                        </xsl:call-template>
                        <xsl:value-of select="@attack"/>
                        <xsl:call-template name="snippet-icon">
                            <xsl:with-param name="name" select="'Defense'"/>
                            <xsl:with-param name="size" select="16"/>
                        </xsl:call-template>
                        <xsl:value-of select="@defense"/>
                        <xsl:call-template name="snippet-icon">
                            <xsl:with-param name="name" select="'Stamina'"/>
                            <xsl:with-param name="size" select="16"/>
                        </xsl:call-template>
                        <xsl:value-of select="@stamina"/>
                    </span>
                </xsl:if>
            </div>

            <!-- Category -->
            <xsl:if test="@category and @category!=''">
                <p class="pokemon-category">
                    <xsl:value-of select="@category"/>
                </p>
            </xsl:if>

            <!-- Description -->
            <xsl:if test="@desc and @desc!=''">
                <p class="pokemon-desc">
                    <xsl:value-of select="@desc"/>
                </p>
            </xsl:if>

            <!-- Unreleased -->
            <xsl:if test="@unreleased>0">
                <p class="pokemon-unreleased">Not released yet</p>
            </xsl:if>

            <!-- Moves -->
            <xsl:call-template name="pokemon-moves">
                <xsl:with-param name="title" select="'Fast attacks'"/>
                <xsl:with-param name="moves" select="moves[@type='fastMoves']/move"/>
            </xsl:call-template>
            <xsl:call-template name="pokemon-moves">
                <xsl:with-param name="title" select="'Elite fast attacks'"/>
                <xsl:with-param name="moves" select="moves[@type='fastMovesElite']/move"/>
            </xsl:call-template>
            <xsl:call-template name="pokemon-moves">
                <xsl:with-param name="title" select="'Charged attacks'"/>
                <xsl:with-param name="moves" select="moves[@type='chargeMoves']/move"/>
            </xsl:call-template>
            <xsl:call-template name="pokemon-moves">
                <xsl:with-param name="title" select="'Elite charged attacks'"/>
                <xsl:with-param name="moves" select="moves[@type='chargeMovesElite']/move"/>
            </xsl:call-template>

            <!-- Evolutions -->
            <xsl:if test="count(evolve/evolve)>0">
                <div class="pokemon-evolutions">
                    <h6>Evolutions</h6>
                    <xsl:apply-templates select="evolve"/>
                </div>
            </xsl:if>
        </div>
    </xsl:template>

    <xsl:template name="pokemon-moves">
        <xsl:param name="title"/>
        <xsl:param name="moves"/>
        <xsl:if test="$moves">
            <div class="pokemon-moves {$moves/../@type}">
                <h6>
                <xsl:value-of select="$title"/>
                </h6>
<!--                <xsl:text>: </xsl:text>-->
                <xsl:for-each select="$moves">
                    <span class="pokemon-move">
                        <xsl:call-template name="snippet-type">
                            <xsl:with-param name="size" select="16"/>
                            <xsl:with-param name="type" select="@type"/>
                        </xsl:call-template>
                        <a href="/move/{@link}" class="type-{@type}">
                            <xsl:value-of select="@name"/>
                        </a>
                    </span>
                </xsl:for-each>
            </div>
        </xsl:if>
    </xsl:template>
</xsl:stylesheet>
