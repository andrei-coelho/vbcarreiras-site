<?php 

class Conf {

    private static $instance = false;
    private $url;

    private function __construct(){
        $conf = json_decode(file_get_contents("../conf.json"));
        $this->url = $conf->production ? $conf->url_prod : $conf->url_dev;
        if($this->url[-1] != "/") $this->url .= "/";
    }

    public function url(){
        return $this->url;
    }

    public static function instance(){
        if(!self::$instance)  self::$instance = new Conf();
        return self::$instance;
    }

}

function conf(){
    return Conf::instance();
}

function url($string = ""){
    return conf()->url().$string;
}

function _url($string = ""){
    echo url($string);
}