<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
    <head>
        <title>Games XML File</title>
    </head>
    <body style="font-family: sans-serif;">
    <h1 style="text-align: center; margin-top: 3rem;">Games</h1>
    <table border="1" style="margin-left:auto; margin-right: auto;">
        <tr style="background-color: rgb(151, 58, 238); color: white;">
        <th style="text-align:left">Title of Games</th>
        <th style="text-align:left">Year of Release</th>
        <th style="text-align:left">ESRB Rating</th>
        <th style="text-align:left">IGN</th>
        <th style="text-align:left">Developer</th>
        <th style="text-align:left">Genre of Games</th>
        </tr>
        <xsl:for-each select="games/md">
        <tr style="background-color: rgb(206, 167, 243);">
        <td style="color: rgb(43, 3, 80); font-weight: 700;"><xsl:value-of select="title"/></td>
        <td><xsl:value-of select="year"/></td>
        <td><xsl:value-of select="ESRB"/></td>
        <td><xsl:value-of select="IGN"/></td>
        <td><xsl:value-of select="Developer"/></td>
        <td><xsl:value-of select="genre"/></td>
        </tr>
        </xsl:for-each>
    </table>
    </body>
</html>
</xsl:template>
</xsl:stylesheet>