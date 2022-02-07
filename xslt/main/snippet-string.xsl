<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template name="snippet-string">
        <xsl:param name="name"/>
        <xsl:param name="string"/>
        <xsl:param name="withReveal" select="1"/>

        <div class="string" data-string="{$string}">
            <h5>
                <xsl:value-of select="$name"/>
            </h5>
            <p>
                <a href="#" class="string-copy btn btn-primary">Copy</a>
                <xsl:if test="$withReveal">
                    <xsl:text> </xsl:text>
                    <a href="#" class="string-reveal btn btn-outline-secondary">Reveal</a>
                </xsl:if>
            </p>
        </div>
    </xsl:template>
</xsl:stylesheet>
