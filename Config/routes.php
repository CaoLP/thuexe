<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'posts', 'action' => 'home'));
	Router::connect('/xe-thue', array('controller' => 'posts', 'action' => 'car_rental'));
	Router::connect('/bang-gia-thue-xe', array('controller' => 'posts', 'action' => 'index','rental_option'));
	Router::connect('/tour-hang-ngay', array('controller' => 'posts', 'action' => 'index','daily_tour'));
	Router::connect('/tour-hang-tuan', array('controller' => 'posts', 'action' => 'index','weekly_tour'));
	Router::connect('/lien-he', array('controller' => 'contact', 'action' => 'contact'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
//	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

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
