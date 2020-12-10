<!-- 
 *           Desenvolvido por:
 *
 *         ┏━━━┓━━┳━━━━┓━━━┓━━┓━┓
 *         ┃ ┏┓┃ ┃┃┃ ┓┓┃┃━┓┃ ┳┛ ┃
 *         ┃ ┣┃┃ ┃┃┃ ┻┛┃┃━┓┃ ┻┓ ┃
 *         ┗━┛┗┛━┻━┛━━━┛━ ┗┗━━┛━┛
 *         
 *         andreifcoelho@gmail.com
 *         github.com/andrei-coelho
 *
-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VB Carreiras</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php _url("img/favicon.png"); ?>"/>
    <link rel="stylesheet" href="<?php _url("css/bootstrap.css"); ?>"/>
    <link rel="stylesheet" href="<?php _url("css/geral.css"); ?>"/>
    <link rel="stylesheet" href="<?php _url("css/menu.css"); ?>"/>
    <?php foreach(files_css() as $css) _css($css); ?>
</head>
<body>
<div id="full-load" class="d-none bg-white" 
    style="position:fixed; z-index:99999999999; width: 100%; height: 100%;
    opacity: 0.9;">

    <div class="container-fluid">

        <div class="row justify-content-center">
        
            <div class="col-7 col-lg-3">
            
                <img class="w-100" src="<?php _url("img/spin.gif"); ?>" alt=""> 
                <h5 class="text-center">Aguarde...</h5>
            </div>

        </div>
    
    </div>

</div>
<div id="mensagem-box"></div>