<?php
App::uses('AppController', 'Controller');
/**
 * CarTypeCars Controller
 *
 * @property CarTypeCar $CarTypeCar
 * @property PaginatorComponent $Paginator
 */
class CarTypeCarsController extends AppController {

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
		$this->CarTypeCar->recursive = 0;
		$this->set('carTypeCars', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CarTypeCar->exists($id)) {
			throw new NotFoundException(__('Invalid car type car'));
		}
		$options = array('conditions' => array('CarTypeCar.' . $this->CarTypeCar->primaryKey => $id));
		$this->set('carTypeCar', $this->CarTypeCar->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CarTypeCar->create();
			if ($this->CarTypeCar->save($this->request->data)) {
				$this->Session->setFlash(__('The car type car has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car type car could not be saved. Please, try again.'));
			}
		}
		$posts = $this->CarTypeCar->Post->find('list');
		$carTypes = $this->CarTypeCar->CarType->find('list');
		$this->set(compact('posts', 'carTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CarTypeCar->exists($id)) {
			throw new NotFoundException(__('Invalid car type car'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CarTypeCar->save($this->request->data)) {
				$this->Session->setFlash(__('The car type car has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car type car could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CarTypeCar.' . $this->CarTypeCar->primaryKey => $id));
			$this->request->data = $this->CarTypeCar->find('first', $options);
		}
		$posts = $this->CarTypeCar->Post->find('list');
		$carTypes = $this->CarTypeCar->CarType->find('list');
		$this->set(compact('posts', 'carTypes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CarTypeCar->id = $id;
		if (!$this->CarTypeCar->exists()) {
			throw new NotFoundException(__('Invalid car type car'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CarTypeCar->delete()) {
			$this->Session->setFlash(__('The car type car has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car type car could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
