<?php
Class Template extends SmartyBC {

    function __construct()
    {

        parent::__construct();
        //setando as pastas do smarty
        $this->setTemplateDir('view/');
        $this->setCacheDir('view/cache/');
        $this->setCompileDir('view/compile/');
    }
}

?>
