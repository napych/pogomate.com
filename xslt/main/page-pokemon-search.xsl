<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon-search">
        <h1>Pokémon search</h1>
        <xsl:call-template name="snippet-search"/>
    </xsl:template>
</xsl:stylesheet>