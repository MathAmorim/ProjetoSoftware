<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>

    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <title>PS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="./css/chota.css"/>
        <link rel="stylesheet" href="./css/doc-styles.css"/>
        <link rel="icon" type="image/png" href="./img/favicon.png" />
    </head>

    <body id="top">

        <div class="container">
            <div class="hero">
            <nav class="tabs is-right">
                <a href="index.html">Home</a>
                <a href="index.html">Sair</a>
                <a href="javascript:void(0)" id="theme-switch" onclick="switchMode(this)">☀️</a>
            </nav>
            </div>
        </div>

        <div class="row is-full-screen"> <!-- Div principal fazer tudo aqui dentro -->
            <div class="col is-center">
                <form>
                    <p class="grouped">
                    <xsl:for-each select="p/div">
                        <div class="row">
                            <p><xsl:value-of select="usuario"/></p>
                                <input class="col is-center" type="number" name="user" id="user" placeholder="Usuário"/>
                        </div>
                        <div class="row">
                            <p><xsl:value-of select="senha"/></p>
                                <input class="col is-center" type="password" name="password" id="password" placeholder="Senha"/>
                        </div>
                        </xsl:for-each>
                        <a href="adm.html" class="button primary">Entrar</a> <a href="user.html" class="button primary">Entrar</a><!-- <button type="submit" class="button primary">Entrar</button> -->
                    </p>
                </form>
            </div>
        </div>

        <footer class="text-center">
            <p><a href="#top">🔝 Back to top</a></p>
            <h5>Made by <a href="https://twitter.com/virusmath" target="_blank">Math Amorim</a></h5>
        </footer>
    </body>
</html>
</xsl:template>

</xsl:stylesheet>