<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template name="html-head-additional">
        <!--        <link rel="apple-touch-startup-image" href="/launch.png"/>-->
        <link rel="icon" href="/img/favicon-maskable.svg"/>
        <link rel="mask-icon" href="/img/ball-black.svg" color="#ffffff"/>
        <link rel="apple-touch-icon" href="/img/favicon-180.png"/>
        <meta name="apple-mobile-web-app-title" content="PoGo Mate"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="default"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="manifest" href="/site.webmanifest"/>
        <meta name="theme-color" content="#ffffff"/>
        <script type="text/javascript" src="/js/clipboard-polyfill.promise.js"/>
        <xsl:if test="/root/@pokemonSearch">
            <script type="text/javascript" src="/js/list.js?{/root/@build}"/>
            <script type="text/javascript" src="/js/search.js?{/root/@build}"/>
        </xsl:if>
    </xsl:template>
</xsl:stylesheet>