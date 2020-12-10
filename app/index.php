<?php
/**
 *
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
 *
 * */

function request(){
    $req = isset($_GET['req']) ? $_GET['req'] : "web";
    $request = explode("/", $req);
    return $request;
}

$request = request();
$main = array_shift($request);

switch ($main) {
    case 'web':
        include "../loadfiles.php";
        view("app", [ "req" => $request ]);
    break;

    
    /**
     * se não for nenhuma das requisições anteriores 
     * ele será tratado como um serviço abaixo...
     */
    default:
        include "../tools/conf.php";
        $service = $main.".php";
        $file = "../services/".$service;
        if(file_exists($file))
            include $file;
        else
            // erro -> não existe esse serviço
    break;

}
