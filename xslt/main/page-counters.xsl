<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="page-counters">
        <h1>Counters finder</h1>
        <!--
        <div class="alert alert-primary" role="alert">
            <xsl:text>To search for boss counters, please specify it's type and attack types.</xsl:text>
        </div>
        -->
        <xsl:call-template name="page-counters-form-type"/>
        <br/>
        <xsl:apply-templates select="counters" mode="page-counters"/>
    </xsl:template>

    <xsl:template name="page-counters-form-type">
        <!--        <h2>By type</h2>-->
        <h2 class="h3">Parameters</h2>
        <form method="get" action="/counters">
            <div class="form-group">
                <label for="type1">Boss type #1</label>
                <select name="type1" id="type1" class="form-control">
                    <option value="">- please select -</option>
                    <xsl:apply-templates select="types" mode="select">
                        <xsl:with-param name="selected" select="@type1"/>
                    </xsl:apply-templates>
                </select>
            </div>
            <div class="form-group">
                <label for="type2">Boss type #2</label>
                <select name="type2" id="type2" class="form-control">
                    <option value="">none</option>
                    <xsl:apply-templates select="types" mode="select">
                        <xsl:with-param name="selected" select="@type2"/>
                    </xsl:apply-templates>
                </select>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="specify-attacks">
                    <xsl:if test="@attack1!='' or @attack2!=''">
                        <xsl:attribute name="checked">checked</xsl:attribute>
                    </xsl:if>
                </input>
                <label class="form-check-label" for="specify-attacks">Boss attack types</label>
            </div>
            <div id="counter-attacks">
                <xsl:if test="@attack1='' and @attack2=''">
                    <xsl:attribute name="style">display:none</xsl:attribute>
                </xsl:if>
                <div class="form-group">
                    <label for="attack1">Attack type #1</label>
                    <select name="attack1" id="attack1" class="form-control">
                        <option value="">- please select -</option>
                        <xsl:apply-templates select="types" mode="select">
                            <xsl:with-param name="selected" select="@attack1"/>
                        </xsl:apply-templates>
                    </select>
                </div>
                <div class="form-group">
                    <label for="attack2">Attack type #2</label>
                    <select name="attack2" id="attack2" class="form-control">
                        <option value="">Same as #1</option>
                        <xsl:apply-templates select="types" mode="select">
                            <xsl:with-param name="selected" select="@attack2"/>
                        </xsl:apply-templates>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </xsl:template>

    <xsl:template match="types" mode="select">
        <xsl:param name="selected" select="''"/>
        <xsl:for-each select="type">
            <xsl:sort select="@name"/>
            <option value="{@name}">
                <xsl:if test="$selected=@name">
                    <xsl:attribute name="selected">selected</xsl:attribute>
                </xsl:if>
                <xsl:value-of select="@name"/>
            </option>
        </xsl:for-each>
    </xsl:template>

    <xsl:template match="counters" mode="page-counters">
        <h2 class="h3">
            <xsl:text>Counters search string for </xsl:text>
            <xsl:value-of select="@typeStr"/>
        </h2>
        <xsl:choose>
            <xsl:when test="@front">
                <h3 class="h5">Front liners</h3>
                <p>Use them first if you have high CP ones. Those are top DPS attackers, even if they won't last long.</p>
                <xsl:call-template name="snippet-string">
                    <xsl:with-param name="name" select="''"/>
                    <xsl:with-param name="string" select="@front"/>
                </xsl:call-template>
                <h3 class="h5">More</h3>
                <p>The rest of the team.</p>
                <xsl:call-template name="snippet-string">
                    <xsl:with-param name="name" select="''"/>
                    <xsl:with-param name="string" select="@team"/>
                </xsl:call-template>
            </xsl:when>
            <xsl:otherwise>
                <xsl:call-template name="snippet-string">
                    <xsl:with-param name="name" select="''"/>
                    <xsl:with-param name="string" select="@team"/>
                </xsl:call-template>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
</xsl:stylesheet>
