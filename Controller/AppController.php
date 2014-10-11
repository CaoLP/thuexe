<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $title_for_layout = '';
// Pass settings in $components array
public $components = array(
    'DebugKit.Toolbar',
    'Session',
    'Auth' => array(
        'loginRedirect' => array('admin'=>true,'controller' => 'users', 'action' => 'index'),
        'logoutRedirect' => array('admin'=>true,'controller' => 'users', 'action' => 'login'),
        'authError' => 'You must be logged in to view this page.',
        'loginError' => 'Invalid Username or Password entered, please try again.'
 
    ));
 
// only allow the login controllers only
public function beforeFilter() {
    $this->Auth->allow('admin_login');
    $this->theme = isset($this->params['admin']) ? "Admin" : "Site";
    if(isset($this->title_for_layout)){$this->set('title_for_layout',$this->title_for_layout);}

    $days_viet = array('Thứ hai','Thứ ba','Thứ tư','Thứ năm','Thứ sáu','Thứ bảy','Chủ nhật');
    $days_en = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
    $days_vi=array(
        '1/2 ngày','1 ngày','2 ngày','3 ngày','4 ngày','5 ngày','6 ngày','7 ngày',
        '8 ngày','9 ngày','10 ngày','11 ngày','12 ngày','13 ngày','14 ngày','15 ngày',
        '16 ngày','17 ngày','18 ngày','19 ngày','20 ngày');
    $nights_vi=array(
        '1 đêm','2 đêm','3 đêm','4 đêm','5 đêm','6 đêm','7 đêm',
        '8 đêm','9 đêm','10 đêm','11 đêm','12 đêm','13 đêm','14 đêm','15 đêm',
        '16 đêm','17 đêm','18 đêm','19 đêm','20 ngày');
    $this->set(compact('days_viet','days_en','days_vi','nights_vi'));
}
 
public function isAuthorized($user) {
    // Here is where we should verify the role and give access based on role
     
    return true;
}
}
