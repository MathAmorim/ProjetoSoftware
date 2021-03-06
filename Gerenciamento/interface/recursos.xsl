<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Recursos</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>ID</th>
      <th>Tipo</th>
      <!--<th>Idade</th>-->
    </tr>
    <xsl:for-each select="recursos/recurso">
    <tr>
      <td><xsl:value-of select="id"/></td>
      <td><a href="../modelo/disp.php"><xsl:value-of select="tipo"/></a></td>
      <!--<td><xsl:value-of select="idade"/></td>-->
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>