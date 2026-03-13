<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {
    
    $routes->setRouteClass(DashedRoute::class);

    // Configuration du préfixe Admin
    $routes->prefix('Admin', function (RouteBuilder $builder): void {
        
        // URL: http://10.10.51.171:8765/admin -> Dashboard
        $builder->connect('/', ['controller' => 'Admin', 'action' => 'index']);
        
        // URLs: /admin/quartier, /admin/electeur, etc.
        $builder->fallbacks(DashedRoute::class);
    });

    $routes->scope('/', function (RouteBuilder $builder): void {
        // On connecte la racine à notre nouveau contrôleur Electeurs
        $builder->setExtensions(['json']); 

        $builder->connect('/', ['controller' => 'Electeurs', 'action' => 'index']);
        $builder->connect('/api/electeurs', ['controller' => 'Electeurs', 'action' => 'apiList']);
        $builder->connect('/stats', ['controller' => 'Stats', 'action' => 'index']);
        $builder->fallbacks();
    });
};