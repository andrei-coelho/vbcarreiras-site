<?php 

function view($view, $vars = []) {
    foreach($vars as $k => $v) $$k = $v;
    include "../view/".$view.".php";
}

function _css($css) {
    echo "<link rel=\"stylesheet\" href=\"".url(str_replace("../app/", "", $css))."?version=13\"/>";
}

function _js($js) {
    echo "<script charset=\"UTF-8\" type=\"text/javascript\" src=\"".url(str_replace("../app/", "", $js))."\"/></script>";
}