<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-cleanup">
        <h1>Cleanup list</h1>
        <!--
                <div class="alert alert-primary" role="alert">
                    <xsl:text>To use a list, paste it to the pokemon search string.</xsl:text>
                </div>
                <div class="alert alert-warning" role="alert">
                    <xsl:text>Ingame implementation of !alola and !galar filters is currently broken, some filters are disabled for now.</xsl:text>
                </div>
        -->
        <form action="/cleanup" method="post" class="cleanup-form unmodified">
            <input type="hidden" name="submit" value="1"/>
            <h2>Keep</h2>
            <div class="cleanup-block">
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="1" name="perfect" id="input-perfect">
                        <xsl:if test="cleanup-defaults/@perfect=1">
                            <xsl:attribute name="checked">checked</xsl:attribute>
                        </xsl:if>
                    </input>
                    <label class="form-check-label" for="input-perfect">100% IV</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="1" name="shiny" id="input-shiny">
                        <xsl:if test="cleanup-defaults/@shiny=1">
                            <xsl:attribute name="checked">checked</xsl:attribute>
                        </xsl:if>
                    </input>
                    <label class="form-check-label" for="input-shiny">Shiny</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="1" name="lucky" id="input-lucky">
                        <xsl:if test="cleanup-defaults/@lucky=1">
                            <xsl:attribute name="checked">checked</xsl:attribute>
                        </xsl:if>
                    </input>
                    <label class="form-check-label" for="input-lucky">Lucky</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="1" name="legendary" id="input-legendary">
                        <xsl:if test="cleanup-defaults/@legendary=1">
                            <xsl:attribute name="checked">checked</xsl:attribute>
                        </xsl:if>
                    </input>
                    <label class="form-check-label" for="input-legendary">Legendary</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="1" name="mythical" id="input-mythical">
                        <xsl:if test="cleanup-defaults/@mythical=1">
                            <xsl:attribute name="checked">checked</xsl:attribute>
                        </xsl:if>
                    </input>
                    <label class="form-check-label" for="input-mythical">Mythical</label>
                </div>
                <div class="form-check-inline">
                    <input class="form-check-input" type="checkbox" value="1" name="special" id="input-special">
                        <xsl:if test="cleanup-defaults/@special=1">
                            <xsl:attribute name="checked">checked</xsl:attribute>
                        </xsl:if>
                    </input>
                    <label class="form-check-label" for="input-special">Special attacks</label>
                </div>
            </div>
            <div class="form-group">
                <label for="input-cp" class="col-form-label">High CP:</label>
                <input type="number" class="form-control" id="input-cp" name="cp">
                    <xsl:if test="cleanup-defaults/@cp&gt;0">
                        <xsl:attribute name="value">
                            <xsl:value-of select="cleanup-defaults/@cp"/>
                        </xsl:attribute>
                    </xsl:if>
                </input>
                <small id="emailHelp" class="form-text text-muted">Always keep high CP pokémon, leave empty to disable.</small>
            </div>
            <h2>Lists</h2>
            <div class="cleanup-block">
                <xsl:for-each select="lists/list">
                    <div class="form-check-inline">
                        <input type="hidden" name="list[{@tag}]" value="0"/>
                        <input class="form-check-input" type="checkbox" value="1" name="list[{@tag}]" id="input-list{@tag}">
                            <xsl:variable name="tag" select="@tag"/>
                            <xsl:if test="../../cleanup-defaults/list[@tag=$tag]/@enabled=1">
                                <xsl:attribute name="checked">checked</xsl:attribute>
                            </xsl:if>
                        </input>
                        <label class="form-check-label" for="input-list{@tag}">
                            <xsl:value-of select="@description"/>
                        </label>
                    </div>
                </xsl:for-each>
            </div>
            <br/>
            <input type="submit" value="Submit" class="btn btn-primary submit-button"/>
            <xsl:call-template name="snippet-string">
                <xsl:with-param name="name" select="''"/>
                <xsl:with-param name="string" select="@cleanup"/>
            </xsl:call-template>
        </form>
    </xsl:template>
</xsl:stylesheet>
