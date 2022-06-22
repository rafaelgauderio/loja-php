<?php
Class Routes {

    private static $pasta_view = 'view';
    public static $pagina;
    private static $pasta_controlador = 'controlador';
    private static $pasta_produtos ='produtos';
   

    static function get_SiteHOME () {
        return Constants::SITE_HOST . '/' .Constants::SITE_PASTA;
    }

    static function get_SiteROOT () {
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Constants::SITE_PASTA;
    }

    static function get_SiteTEMA () {
        return self::get_SiteHOME() . '/' .self::$pasta_view;
    }

    static function pag_conta () {
        return self::get_SiteHOME() . '/conta' ;
    }

    static function pag_Logar () {
        return self::get_SiteHOME() . '/logar' ;
    }

    static function pag_logoff () {
        return self::get_SiteHOME() . '/sair' ;
    }

    static function pag_Carrinho () {
        return self::get_SiteHOME() . '/carrinho' ;
    }

    static function pag_Alterar_Carrinho () {
        return self::get_SiteHOME()  . '/alterar_carrinho';
    }
  
    static function pag_Finalizar_Pedido () {
        return self::get_SiteHOME()  . '/finalizar_pedido';
    }

    static function pag_Pedido_Finalizado () {
        return self::get_SiteHOME()  . '/pedido_finalizado';
    }
   

    static function pag_ProdutosDescricao () {
        return self::get_SiteHOME() . '/produtos_desc' ;
    }

    static function pag_Produtos () {
        return self::get_SiteHOME() . '/produtos' ;
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

    static function Get_Image($name) {
        $image = self::get_ImageURL() . "/" .$name;
        return $image;
    } 
    
    static function get_controlador() {
        return self::$pasta_controlador;
    }

    static function redirecionarPagina($time, $pagina) {
        $link = '<meta http-equiv="refresh" content="' .$time.';url='.$pagina. '">';
        echo $link;
    }
    


    static function get_pagina() {
        if(isset($_GET['pagina'])) {

            $pagina = $_GET['pagina'];
            self::$pagina = explode('/',$pagina);
            //echo '<pre>';
            //var_dump(self::$pagina);
            //echo '<pre>';
            $pagina = 'controlador/' . self::$pagina[0] . '.php';
            $pagina1 = 'produtos/' . self::$pagina[0] . '.php';
            if (file_exists($pagina)) {
                include $pagina;
            } else if(file_exists($pagina1)) {
                include $pagina1;
            } else {
                include 'erro.php';
        } 

       } else {
           include 'home.php';
       }
    }

}
