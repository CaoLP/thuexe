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
Router::connect('/xe-thue/:url', array('controller' => 'posts', 'action' => 'view', 'car_rental'),
    array('pass' => array(
        'url'
    )));
Router::connect('/bang-gia-thue-xe', array('controller' => 'posts', 'action' => 'index', 'rental_option'));
Router::connect('/tour-hang-ngay', array('controller' => 'posts', 'action' => 'index', 'daily_tour'));
Router::connect('/tour-hang-ngay/:url', array('controller' => 'posts', 'action' => 'view', 'daily_tour'),
    array('pass' => array(
        'url'
    )));
Router::connect('/tour-hang-tuan', array('controller' => 'posts', 'action' => 'index', 'weekly_tour'));
Router::connect('/tour-hang-tuan/:url', array('controller' => 'posts', 'action' => 'view', 'weekly_tour'),
    array('pass' => array(
        'url'
    )));
Router::connect('/page', array('controller' => 'posts', 'action' => 'index', 'page'));
Router::connect('/page/:url', array('controller' => 'posts', 'action' => 'view', 'page'),
    array('pass' => array(
        'url'
    )));
Router::connect('/lien-he', array('controller' => 'contacts', 'action' => 'contact'));
Router::connect('/admin', array('admin'=>true,'controller' => 'dashboard', 'action' => 'index'));
Router::connect('/sitemap.xml', array('controller' => 'posts', 'action' => 'sitemap'));
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
