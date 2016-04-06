<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace App;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        //Run Layouts
        $app = $e->getApplication()->getEventManager();
        $app->attach('dispatch', array($this, 'initLayout'), -100);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function initLayout($e) {
        
        $routeMatchParams = array();

        $routeMatchParams = $e->getRouteMatch()->getParams();

        (!isset($routeMatchParams['__NAMESPACE__'])) ? $routeMatchParams['__NAMESPACE__'] = "Site\Controller" : NULL;
        $moduleName = substr($routeMatchParams['__NAMESPACE__'], 0, strpos($routeMatchParams['__NAMESPACE__'], '\\'));
        $controllerName = str_replace('\\Controller\\', '/', $routeMatchParams['controller']);
        $actionName = $routeMatchParams['action'];

        $config = $e->getApplication()->getServiceManager()->get('config');
        $controller = $e->getTarget();
        //print_r($config['controller_layouts']);die;
        
        if (isset($config['module_layouts'][$moduleName])) {
            $controller->layout($config['module_layouts'][$moduleName]);
        }
        if (isset($config['controller_layouts'][$controllerName])) {
            $controller->layout($config['controller_layouts'][$controllerName]);
        }
        if (isset($config['action_layouts'][$controllerName . '/' . $actionName])) {
            $controller->layout($config['action_layouts'][$controllerName . '/' . $actionName]);
        }
    }
}
