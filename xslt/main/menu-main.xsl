<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template name="menu-main">
        <nav id="menu-main" class="switcher navbar navbar-expand navbar-dark bg-dark"><!-- for vertical: navbar-expand-lg -->
            <a class="navbar-brand" href="/">
                <img src="/img/pokeball-special-noshade.svg"/>
                <span>PoGo Mate</span>
            </a>
            <!--
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"/>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            -->
            <ul class="navbar-nav"><!-- for vertical: mr-auto -->
                <xsl:call-template name="menu-main-item">
                    <xsl:with-param name="link" select="'/cleanup'"/>
                    <xsl:with-param name="text" select="'Cleanup'"/>
                    <xsl:with-param name="icon" select="'/fontawesome/svgs/solid/broom.svg'"/>
                </xsl:call-template>
                <xsl:call-template name="menu-main-item">
                    <xsl:with-param name="link" select="'/lists'"/>
                    <xsl:with-param name="text" select="'Lists'"/>
                    <xsl:with-param name="icon" select="'/fontawesome/svgs/solid/list-ul.svg'"/>
                </xsl:call-template>
                <xsl:call-template name="menu-main-item">
                    <xsl:with-param name="link" select="'/counters'"/>
                    <xsl:with-param name="text" select="'Counters'"/>
                    <xsl:with-param name="icon" select="'/fontawesome/svgs/solid/fire-alt.svg'"/>
                </xsl:call-template>
                <xsl:call-template name="menu-main-item">
                    <xsl:with-param name="link" select="'/pokemon'"/>
                    <xsl:with-param name="text" select="'Search'"/>
                    <xsl:with-param name="icon" select="'/fontawesome/svgs/solid/search.svg'"/>
                </xsl:call-template>
            </ul>
            <!--
                        </div>
            -->
        </nav>
    </xsl:template>

    <xsl:template name="menu-main-item">
        <xsl:param name="link"/>
        <xsl:param name="text"/>
        <xsl:param name="icon"/>

        <li class="nav-item">
            <xsl:attribute name="class">
                <xsl:text>nav-item</xsl:text>
                <xsl:if test="/root/@controllerUri=$link">
                    <xsl:text> active</xsl:text>
                </xsl:if>
            </xsl:attribute>
            <a class="nav-link" href="{$link}" aria-label="{$text}">
                <img src="{$icon}" alt="{$text}"/>
                <span>
                    <xsl:value-of select="$text"/>
                </span>
            </a>
        </li>
    </xsl:template>
</xsl:stylesheet>
