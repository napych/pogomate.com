<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-pokemon-search">
        <h1>Pokémon search</h1>
        <input type="text" id="pokemon-search" placeholder="Start typing pokémon name or # here" class="form-control"/>
        <br/>
        <div id="pokemon-search-result"/>
    </xsl:template>
</xsl:stylesheet>