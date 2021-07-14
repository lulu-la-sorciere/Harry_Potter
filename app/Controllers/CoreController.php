<?php

namespace HarryPotter\Controllers;

abstract class CoreController
{
    protected $router;
    private $currentRouteName;

    public function __construct($router, $match)
    {
        $this->router = $router;

        $this->currentRouteName = $match['name'] ?? '';
        
    }

    public function redirect($currentRouteName, $params = [])
    {
        header('Location:' . $this->router->generate($currentRouteName, $params));
    }

    protected function show(string $viewName, $viewVars = [])
    {
       
        // recovery of the property $router that is passed on to the views
        $router = $this->router;

        $viewVars['currentPage'] = $viewName;

        //absolute url for assets
        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
       

        // absolute url for the root of the site
        $viewVars['baseUri'] = $_SERVER['BASE_URI'];
       
        
        extract($viewVars);

        if (isset($_SESSION['userObject'])) {
            $currentUser = $_SESSION['userObject'];
        }

        require_once __DIR__ . '/../views/layout/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/layout/footer.tpl.php';

    }
}