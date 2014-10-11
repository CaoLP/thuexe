<?php
App::uses('AppController', 'Controller');
/**
 * CarRentalBookings Controller
 *
 * @property CarRentalBooking $CarRentalBooking
 * @property PaginatorComponent $Paginator
 */
class CarRentalBookingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CarRentalBooking->recursive = 0;
		$this->set('carRentalBookings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CarRentalBooking->exists($id)) {
			throw new NotFoundException(__('Invalid car rental booking'));
		}
		$options = array('conditions' => array('CarRentalBooking.' . $this->CarRentalBooking->primaryKey => $id));
		$this->set('carRentalBooking', $this->CarRentalBooking->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CarRentalBooking->create();
			if ($this->CarRentalBooking->save($this->request->data)) {
				$this->Session->setFlash(__('The car rental booking has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car rental booking could not be saved. Please, try again.'));
			}
		}
		$posts = $this->CarRentalBooking->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CarRentalBooking->exists($id)) {
			throw new NotFoundException(__('Invalid car rental booking'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CarRentalBooking->save($this->request->data)) {
				$this->Session->setFlash(__('The car rental booking has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car rental booking could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CarRentalBooking.' . $this->CarRentalBooking->primaryKey => $id));
			$this->request->data = $this->CarRentalBooking->find('first', $options);
		}
		$posts = $this->CarRentalBooking->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CarRentalBooking->id = $id;
		if (!$this->CarRentalBooking->exists()) {
			throw new NotFoundException(__('Invalid car rental booking'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CarRentalBooking->delete()) {
			$this->Session->setFlash(__('The car rental booking has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car rental booking could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CarRentalBooking->recursive = 0;
		$this->set('carRentalBookings', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CarRentalBooking->exists($id)) {
			throw new NotFoundException(__('Invalid car rental booking'));
		}
		$options = array('conditions' => array('CarRentalBooking.' . $this->CarRentalBooking->primaryKey => $id));
		$this->set('carRentalBooking', $this->CarRentalBooking->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CarRentalBooking->create();
			if ($this->CarRentalBooking->save($this->request->data)) {
				$this->Session->setFlash(__('The car rental booking has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car rental booking could not be saved. Please, try again.'));
			}
		}
		$posts = $this->CarRentalBooking->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CarRentalBooking->exists($id)) {
			throw new NotFoundException(__('Invalid car rental booking'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CarRentalBooking->save($this->request->data)) {
				$this->Session->setFlash(__('The car rental booking has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car rental booking could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CarRentalBooking.' . $this->CarRentalBooking->primaryKey => $id));
			$this->request->data = $this->CarRentalBooking->find('first', $options);
		}
		$posts = $this->CarRentalBooking->Post->find('list');
		$this->set(compact('posts'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CarRentalBooking->id = $id;
		if (!$this->CarRentalBooking->exists()) {
			throw new NotFoundException(__('Invalid car rental booking'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CarRentalBooking->delete()) {
			$this->Session->setFlash(__('The car rental booking has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car rental booking could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
