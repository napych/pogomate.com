<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="page-index">
        <h1>PoGo Mate</h1>
        <div id="a2hs" style="display:none">
            <h2 class="h3">Add to Home Screen</h2>
            <p>Add WebApp icon to Home Screen for quick access.</p>
            <a href="#" class="a2hs-install btn btn-primary">Add to home screen</a>
        </div>
        <xsl:call-template name="snippet-search"/>
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

        <div id="tools">
            <h2 class="h3">Tools</h2>
            <div class="entry">
                <a href="/cleanup">
                    <img src="https://test.pogomate.com/fontawesome/svgs/solid/broom.svg" width="16" height="16"/>
                    <h3 class="h6">Cleanup</h3>
                </a>
                <span> pokémon storage fast. Configure your search string and mass delete species you don't need.</span>
            </div>
            <div class="entry">
                <a href="/lists">
                    <img src="https://test.pogomate.com/fontawesome/svgs/solid/list-ul.svg" width="16" height="16"/>
                    <h3 class="h6">Lists</h3>
                </a>
                <span> — use search strings to sort or rename species depending on their usage.</span>
            </div>
            <div class="entry">
                <a href="/counters">
                    <img src="https://test.pogomate.com/fontawesome/svgs/solid/fire-alt.svg" width="16" height="16"/>
                    <h3 class="h6">Counters</h3>
                </a>
                <span> — build teams for effectively fighting bosses, find your best counters against Team R, etc.</span>
            </div>
            <div class="entry">
                <a href="/pokemon">
                    <img src="https://test.pogomate.com/fontawesome/svgs/solid/search.svg" width="16" height="16"/>
                    <h3 class="h6">Search</h3>
                </a>
                <span> for a pokémon by name or ID to find out what's it good for.</span>
            </div>
        </div>
        <div id="howto">
            <h2 class="h3">How to use search strings</h2>
            <ol>
                <li>Press “Copy” button to copy a string.</li>
                <li>Open the Pokémon Storage screen in the Pokémon Go game and paste a string into the search field.</li>
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
