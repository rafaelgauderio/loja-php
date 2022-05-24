<?php
Class Routes {

    public static $pagina;

    static function get_SiteHOME () {
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }

    static function get_pagina() {
        if(isset($_GET['pagina'])) {

            $pagina = $_GET['pagina'];
            self::$pagina = explode('/',$pagina);
            //echo '<pre>';
            //var_dump(self::$pagina);
            //echo '<pre>';
            $pagina = 'controlador/' . self::$pagina[0] . '.php';
            //$pagina = 'controlador/' . $_GET['pagina'] . '.php';
            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
        } 
        }
    }

}
