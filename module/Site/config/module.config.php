<?php

namespace Site;

return array(
    'controllers' => array(
        'invokables' => array(
            'Site\Controller\Home' => Controller\HomeController::class
        ),
    ),
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Site\Controller\Home',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Site' => __DIR__ . '/../view',
        ),
    ),
);
