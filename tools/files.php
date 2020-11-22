<?php 

class Files {
    
    private static $instance = false;
    private $cssFiles, $jsFiles;

    private function __construct(){
        $this->cssFiles = self::get_route_files("../app/css");
        $this->jsFiles  = self::get_route_files("../app/js");
    }

    public static function instance() {
        if(!self::$instance) self::$instance = new Files();
        return self::$instance;
    }

    public function css():array {
        return $this->cssFiles;
    }

    public function js():array {
        return $this->jsFiles;
    }

    private static function get_route_files($dir, $files = []){
        foreach(
            array_diff(
                scandir($dir), 
                array('..', '.', 'README.md', 'bootstrap.css',
                'bootstrap.js', 'jquery.js', 'navigation.js'
                )
            ) 
        as $file) {
            $file_d = $dir."/".$file;
            if(is_dir($file_d)) $files = self::get_route_files($dir."/".$file, $files);
            else $files[] = $file_d;
        }
        return $files;
    }
    

}

function files() {
    return Files::instance();
}

function files_js() {
    return files()->js();
}

function files_css() {
    return files()->css();
}