<?php 
namespace Thiagorviero\Gc\Routes;

use Gc\Resources\Init\Bootstrap;

class Routes extends Bootstrap{
    private $route;
    protected function initRoutes(){
        $this->route['notFound']=[
            'route' => '',
            'controller' => 'IndexController',
            'action' => 'notFound'
        ];
        $this->route['index']=[
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'home'
        ];
        return $this->route;
    }
}
?>