<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-lists">
        <div id="page-lists">
            <h1>Pokemon lists search strings</h1>
            <!--
            <div class="alert alert-primary" role="alert">
                <xsl:text>To use a list, copy and paste it to the pokemon search string.</xsl:text>
            </div>
            -->
            <!--<p>Search strings for all available lists. To use it, copy a string and paste it into the pokemon search string.</p>-->
            <xsl:for-each select="list[not(@block=preceding-sibling::list/@block)]">
                <xsl:variable name="block" select="@block"/>
                <h2 class="h3">
                    <xsl:value-of select="$block"/>
                </h2>
                <div class="entries">
                    <xsl:for-each select="../list[@block=$block]">
                        <div class="entry">
                            <xsl:call-template name="snippet-icon">
                                <xsl:with-param name="name" select="@type"/>
                                <xsl:with-param name="size" select="72"/>
                            </xsl:call-template>
                            <div class="inner">
                                <h3 class="h6">
                                    <xsl:value-of select="@name"/>
                                </h3>
                                <xsl:call-template name="snippet-string">
                                    <xsl:with-param name="name" select="''"/>
                                    <xsl:with-param name="string" select="@string"/>
                                </xsl:call-template>
                            </div>
                        </div>
                    </xsl:for-each>
                </div>
            </xsl:for-each>
            <h2>Fine search</h2>
            <div class="fine-search">
                <xsl:for-each select="list">
                    <xsl:if test="tier">
                        <h3 class="h4">
                            <xsl:call-template name="snippet-icon">
                                <xsl:with-param name="name" select="@type"/>
                                <xsl:with-param name="type" select="@type"/>
                                <xsl:with-param name="size" select="20"/>
                            </xsl:call-template>
                            <xsl:value-of select="@description"/>
                        </h3>
                        <div class="fine-search-block">
                            <xsl:for-each select="tier">
                                <div class="entry">
                                    <div class="inner">
                                        <h4 class="h5">
                                            <xsl:value-of select="@description"/>
                                        </h4>
                                        <xsl:call-template name="snippet-string">
                                            <xsl:with-param name="name" select="''"/>
                                            <xsl:with-param name="string" select="@string"/>
                                            <xsl:with-param name="withReveal" select="0"/>
                                        </xsl:call-template>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>
                    </xsl:if>
                </xsl:for-each>
            </div>
        </div>
    </xsl:template>
</xsl:stylesheet>
