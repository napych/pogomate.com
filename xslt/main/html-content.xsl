<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template name="html-body">
        <body>
            <div class="container">
                <xsl:call-template name="menu-main"/>
                <xsl:call-template name="content-wrapper"/>
            </div>
        </body>
    </xsl:template>

    <xsl:template name="html-body-switcher">
        <body>
            <xsl:call-template name="menu-main"/>
            <xsl:call-template name="content-wrapper"/>
        </body>
    </xsl:template>

</xsl:stylesheet>