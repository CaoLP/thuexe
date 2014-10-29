<?php
App::uses('AppController', 'Controller');
/**
 * Options Controller
 *
 * @property Option $Option
 * @property PaginatorComponent $Paginator
 */
class DashboardController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->loadModel('TourBooking');
		$this->loadModel('Contact');

		$total_booking = $this->TourBooking->find('count',array(
															   'conditions'=>array(
																   'TourBooking.status'=> 1
															   )
														  ));
		$total_contact = $this->Contact->find('count',array(
															   'conditions'=>array(
																   'Contact.status'=> 1
															   )
														  ));
		$this->set(compact('total_booking','total_contact'));
	}

}
