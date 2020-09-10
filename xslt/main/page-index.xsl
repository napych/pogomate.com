<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="page-index">
        <h1>PoGo Mate</h1>
        <div id="a2hs" style="display:none">
            <h2>Add to Home Screen</h2>
            <p>Add WebApp icon to Home Screen for quick access.</p>
            <a href="#" class="a2hs-install btn btn-primary">Add to home screen</a>
        </div>
        <div id="search">
            <h2>Pokémon search</h2>
            <xsl:call-template name="snippet-search"/>
        </div>
        <!--
        <div id="news">
            <h2>News</h2>
            <strong>08-sep-2020</strong>
            <p>Greatly improved counters finder logic.</p>
            <strong>26-aug-2020</strong>
            <p>Added cleanup settings.</p>
            <p>Fixes for cleanup and counters search strings.</p>
            <strong>25-aug-2020</strong>
            <p>Added mega evolutions.</p>
            <strong>21-aug-2020</strong>
            <p>Added pokémon search.</p>
            <strong>20-aug-2020</strong>
            <p>Added extended shadow, alolan, galar pokemon search support.</p>
        </div>
        -->
        <div id="howto">
            <h2>How to use search strings</h2>
            <p>It's just as simple as:</p>
            <ol>
                <li>Press "Copy" to copy a string.</li>
                <li>Open the Pokémon Storage screen in the Pokémon Go game and paste a string to the search field.</li>
            </ol>
        </div>
        <div id="contacts">
            <p>
                <xsl:text>Follow us: </xsl:text>
            <a href="https://twitter.com/pogo_mate">
                <img src="/fontawesome/svgs/brands/twitter.svg" class="twitter" alt="Twitter @pogo_mate" width="24" height="24"/>
            </a>
            </p>
        </div>
    </xsl:template>
</xsl:stylesheet>
