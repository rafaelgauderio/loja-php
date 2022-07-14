<?php
Class Modelo extends SmartyBC {

    function __construct()
    {

        parent::__construct();
        //setando as pastas do smarty
        $this->setTemplateDir('view/');
        $this->setCacheDir('cache/');
        $this->setCompileDir('compilar/');
    }
}

?>
