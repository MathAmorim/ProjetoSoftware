<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>Reserva</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
          <th>Status</th>
    </tr>
    <xsl:for-each select="recursos/recurso">
    <tr>
      <td><a href="../"><xsl:value-of select="status"/></a></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>