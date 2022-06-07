<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <html>
        <body>
            <h2>Usuarios</h2>
            <table border="1">
                <tr bgcolor="#9acd32">
                    <th>Remover</th>
                </tr>
                <xsl:for-each select="usuarios/usuario">
                    <tr>
                        <td><a href="../interface/remove.html"><xsl:value-of select="remover"/></a></td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
    </html>
</xsl:template>

</xsl:stylesheet>