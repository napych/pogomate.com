<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template name="snippet-string">
        <xsl:param name="name"/>
        <xsl:param name="string"/>

        <div class="string" data-string="{$string}">
            <h3>
                <xsl:value-of select="$name"/>
            </h3>
            <p>
                <a href="#" class="string-copy">Copy</a>
                <xsl:text> </xsl:text>
                <a href="#" class="string-reveal">Reveal</a>
            </p>
        </div>
    </xsl:template>
</xsl:stylesheet>