<?php

    namespace App;

    use MF\Init\Bootstrap;

    class Route extends Bootstrap {
        
        public function initRoutes(){
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );

            $routes['inscreverse'] = array(
                'route' => '/inscreverse',
                'controller' => 'IndexController',
                'action' => 'inscreverse'
            );

            $routes['registrar'] = array(
                'route' => '/registrar',
                'controller' => 'indexController',
                'action' => 'registrar'
            );

            $routes['autenticar'] = array(
                'route' => '/autenticar',
                'controller' => 'AuthController',
                'action' => 'autenticar'
            );

            $routes['timeline'] = array(
                'route' => '/timeline',
                'controller' => 'AppController',
                'action' => 'timeline'
            );

            $routes['sair'] = array(
                'route' => '/sair',
                'controller' => 'AuthController',
                'action' => 'sair'
            );

            $routes['tweet'] = array(
                'route' => '/tweet',
                'controller' => 'AppController',
                'action' => 'tweet'
            );

            $this->setRoutes($routes);
        }
    }

?>