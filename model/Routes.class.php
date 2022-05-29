<?php
Class Routes {

    public static $pagina;
    private static $pasta_controlller = 'controlador';
    private static $pasta_view = 'view';

    static function get_SiteHOME () {
        return Config::SITE_HOST . '/' .Config::SITE_PASTA;
    }

    static function get_SiteROOT () {
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }

    static function get_SiteTEMA () {
        return self::get_SiteHOME() . '/' .self::$pasta_view;
    }

    static function pag_Conta () {
        return self::get_SiteHOME() . '/conta' ;
    }

    static function pag_Carrinho () {
        return self::get_SiteHOME() . '/carrinho' ;
    }

    static function pag_Contato () {
        return self::get_SiteHOME() . '/contato' ;
    }
    
    static function pag_Conosco () {
        return self::get_SiteHOME() . '/conosco' ;
    }

    static function pag_Empresa () {
        return self::get_SiteHOME() . '/empresa' ;
    }

    static function get_ImagesFolder() {
        return 'imagens/';
    }

    static function get_ImageURL () {
        return self::get_SiteHOME() . '/' . self::get_ImagesFolder();
    }


    static function ImageResize($img, $width, $height) {
        $image = self::get_ImageURL() . "thumb.php?src={$img}&w={$width}&h={$height}&zc=1";
        return $image;
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
