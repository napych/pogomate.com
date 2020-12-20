<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template name="html-body-content">
        <div class="container">
            <xsl:call-template name="menu-main"/>
            <xsl:call-template name="content-wrapper"/>
        </div>
    </xsl:template>

    <xsl:template name="html-body-switcher-content">
        <xsl:call-template name="menu-main"/>
        <xsl:call-template name="content-wrapper"/>
    </xsl:template>
</xsl:stylesheet>
