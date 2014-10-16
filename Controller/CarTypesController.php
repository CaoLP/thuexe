<?php
App::uses('AppController', 'Controller');
/**
 * CarTypes Controller
 *
 * @property CarType $CarType
 * @property PaginatorComponent $Paginator
 */
class CarTypesController extends AppController {

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
		$this->CarType->recursive = 0;
		$this->set('carTypes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CarType->exists($id)) {
			throw new NotFoundException(__('Invalid car type'));
		}
		$options = array('conditions' => array('CarType.' . $this->CarType->primaryKey => $id));
		$this->set('carType', $this->CarType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CarType->create();
			if ($this->CarType->save($this->request->data)) {
				$this->Session->setFlash(__('The car type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CarType->exists($id)) {
			throw new NotFoundException(__('Invalid car type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CarType->save($this->request->data)) {
				$this->Session->setFlash(__('The car type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CarType.' . $this->CarType->primaryKey => $id));
			$this->request->data = $this->CarType->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CarType->id = $id;
		if (!$this->CarType->exists()) {
			throw new NotFoundException(__('Invalid car type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CarType->delete()) {
			$this->Session->setFlash(__('The car type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The car type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
