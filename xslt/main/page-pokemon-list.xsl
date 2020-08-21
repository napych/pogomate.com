<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon-list">
        <h1>Pokémon list</h1>
        <div class="alert alert-primary" role="alert">
            <xsl:text>You can use a web browser search to look up for a particular pokemon.</xsl:text>
        </div>

        <xsl:for-each select="reasons">
            <p>
                <a href="/pokemon/{@shortName}">
                    <strong>
                        <xsl:value-of select="@name"/>
                    </strong>
                </a>
                <br/>
                <xsl:for-each select="reason">
                    <xsl:value-of select="@text"/>
                    <br/>
                </xsl:for-each>
            </p>
        </xsl:for-each>
    </xsl:template>
</xsl:stylesheet>