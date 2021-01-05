<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template name="html-body-content">
        <div class="container">
            <xsl:call-template name="menu-main"/>
            <xsl:call-template name="content-wrapper"/>
        </div>
        <script async="async" type="text/javascript" src="/js/clipboard-polyfill.promise.js?{/root/@build}"/>
        <script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-177435892-1"/>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-177435892-1');
        </script>
    </xsl:template>

    <xsl:template name="html-body-switcher-content">
        <xsl:call-template name="menu-main"/>
        <xsl:call-template name="content-wrapper"/>
    </xsl:template>
</xsl:stylesheet>
