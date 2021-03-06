<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	// Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'index', 'action' => 'home'));
    Router::connect('/home', array('controller' => 'index', 'action' => 'home'));
    Router::connect('/comingsoon', array('controller' => 'index', 'action' => 'comingsoon'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
    
    Router::connect('/survey', array('controller' => 'index', 'action' => 'survey'));
    
    Router::connect('/contactus', array('controller' => 'index', 'action' => 'contactus'));
    
    Router::connect("/reports/:reportName/:action/*", array('controller' => 'reports'), array("pass" => array("reportName"), "reportName" => '[0-9a-zA-Z\-]+') );
    
    Router::connect("/vmreports/:reportName/:action/*", array('controller' => 'vmreports'), array("pass" => array("reportName"), "reportName" => '[0-9a-zA-Z\-]+') );
    
    Router::connect('/smarts', array('controller' => 'smarts', 'action' => 'general'));
    
    Router::connect("/smarts/:reportName/:action/*", array('controller' => 'smarts'), array("pass" => array("reportName"), "reportName" => '[0-9a-zA-Z\-]+') );
    

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
