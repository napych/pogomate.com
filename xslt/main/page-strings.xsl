<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-strings">
        <div class="container">
            <h1>Search strings</h1>
            <div class="alert alert-primary" role="alert">
                <xsl:text>To use a string, copy and paste it to the pokemon search field.</xsl:text>
            </div>

            <h3>Cleanup candidates</h3>
            <p>
                <xsl:value-of select="@cleanup"/>
            </p>

            <xsl:for-each select="list">
                <h3>
                    <xsl:value-of select="@name"/>
                </h3>
                <p>
                    <xsl:value-of select="@string"/>
                </p>
            </xsl:for-each>

            <h2>Explanation</h2>
            <div class="alert alert-primary" role="alert">
                <xsl:text>You can use a web browser search to look up for a particular pokemon.</xsl:text>
            </div>

            <xsl:for-each select="reasons">
                <p>
                    <strong>
                        <xsl:value-of select="@name"/>
                    </strong>
                    <br/>
                    <xsl:for-each select="reason">
                        <xsl:value-of select="@text"/>
                        <br/>
                    </xsl:for-each>
                </p>
            </xsl:for-each>
        </div>
    </xsl:template>
</xsl:stylesheet>