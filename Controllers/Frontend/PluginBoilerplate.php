<?php

class Shopware_Controllers_Frontend_PluginBoilerplate extends Enlight_Controller_Action
{
    public function indexAction()
    {
        $page = (int) $this->Request()->getQuery('sPage', 1);
        $layout = $this->Request()->getQuery('sTemplate', 'table');
    
        $this->View()->assign('');
    }
}
