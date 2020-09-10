<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template name="snippet-search">
        <script async="async" type="text/javascript" src="/js/list.js?{/root/@build}"/>
        <script async="async" type="text/javascript" src="/js/search.js?{/root/@build}"/>
        <input type="text" id="pokemon-search" placeholder="Start typing pokémon name or # here" class="form-control" aria-label="Pokémon search" role="search"/>
        <br/>
        <div id="pokemon-search-result"/>
    </xsl:template>
</xsl:stylesheet>
