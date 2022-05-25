<?php
Class Routes {

    public static $pagina;
    private static $pasta_controlller = 'controlador';
    private static $pasta_view = 'view';

    static function get_SiteHOME () {
        return Config::SITE_URL . '/' .Config::SITE_PASTA;
    }

    static function get_SiteROOT () {
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }

    static function get_SiteTEMA () {
        return self::get_SiteHOME() . '/' .self::$pasta_view;
    }

    static function pag_carrinho () {
        return self::get_SiteHOME() . '/carrinho' ;
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
