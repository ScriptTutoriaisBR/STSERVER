<?php
    $site = "http://localhost/";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo ao ST SERVER</title>
    <link rel="stylesheet" type="text/css" href="css/templete.css?version=12">
    <link rel="apple-touch-icon" sizes="57x57" href="img/icones/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/icones/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icones/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icones/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icones/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icones/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/icones/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icones/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icones/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/icones/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icones/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/icones/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icones/favicon-16x16.png">
    <link rel="manifest" href="img/icones/manifest.json">
    <meta name="msapplication-TileColor" content="#333333">
    <meta name="msapplication-TileImage" content="img/icones/ms-icon-144x144.png">
    <meta name="theme-color" content="#333333">
</head>
<body>
    <div class="topo">
        <a href="./"><img id="logo-topo" src="img/logoSTSERVER.fw.png" title="51" width="51" height="51"></a>
        <span id="nome-topo">ST SERVER Lista de diretórios</span>

        <form id="formBusca" action="">
            <input id="input-search" type="text" name="search" placeholder="Sua Pesquisa">
            <input id="btn-search" type="submit" value="">
        </form>
    </div>

    <div class="menus">
        <ul>
            <a href="info.php" title="informação do php"><li>php info = phpinfo()</li></a>
            <a href="<?php echo $site?>phpmyadmin/" title="My SQL"><li>phpMyAdmin</li></a>
        </ul>
    </div>

    <div class="conteudos">
        <?php
            $d = dir($_SERVER['DOCUMENT_ROOT']);
            $i = -1;

            while($dados = $d->read()){
                if($dados == "." || $dados == ".."){

                }else{
        ?>
        <a href="<?php echo $site,$dados;?>">
            <div class="bloco-conteudo">
                <span><?php echo ucfirst($dados);?></span>
            </div>
        </a>
        <?php
                }
            }
        ?>
        <!--
        <div class="bloco-conteudo">
            <span>Nome do arquivo ou da pasta</span>
        </div>
        <div class="bloco-conteudo">
            <span>Nome do arquivo ou da pasta</span>
        </div>
-->
    </div>


    <div class="footer">
        <a href="https://lumatechappsegames.blogspot.com/search/label/Softwares" title="+ Aplicativos" target="_blank">+ More Apps</a>
        <ul>
            <a href="https://lumatechappsegames.blogspot.com/2020/05/meu-shop-brasil.html" target="_blank"><li><img src="https://1.bp.blogspot.com/-9Zt0VYJbBgY/Xs8b3ibLkSI/AAAAAAAAAR4/mN9gP4PLPAwoW_Z6m3Y6le0qfjeudSZYwCLcBGAsYHQ/s1600/ms-icon-310x310.png" width="70" height="70"><br>Meu Shop Brasil</li></a>
            <a href="https://lumatechappsegames.blogspot.com/2020/05/htmlpad.html" target="_blank"><li><img src="https://1.bp.blogspot.com/-u29vwvlAy54/XtQLFCI6QzI/AAAAAAAAASc/DB-WUUEvhooEx3bMtlTO1HxfF5lsxO46QCLcBGAsYHQ/s1600/htmlpadplusplusanuncio.png.png" width="70" height="70"><br>HTMLPAD++</li></a>
            <a href="https://lumatechappsegames.blogspot.com/2020/05/paddown.html" target="_blank"><li><img src="https://1.bp.blogspot.com/-L7lq0WXAfv4/XtQLgcGYlKI/AAAAAAAAASk/Q2Wh3-LAWBMkRrfSNAgyrMEXyesHdgdpACLcBGAsYHQ/s320/Capturar1.PNG" width="70" height="70"><br>PADDOWN</li></a>
            <a href="https://lumatechappsegames.blogspot.com/2020/05/st-server-servidor-apache.html" target="_blank"><li><img src="img/logoSTSERVER.fw.png" width="70" height="70"><br>ST SERVER</li></a>
        </ul>
    </div>
</body>
</html>