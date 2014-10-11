<?php
App::uses('AppController', 'Controller');
/**
 * TourSchedules Controller
 *
 * @property TourSchedule $TourSchedule
 * @property PaginatorComponent $Paginator
 */
class TourSchedulesController extends AppController {

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
		$this->TourSchedule->recursive = 0;
		$this->set('tourSchedules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TourSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid tour schedule'));
		}
		$options = array('conditions' => array('TourSchedule.' . $this->TourSchedule->primaryKey => $id));
		$this->set('tourSchedule', $this->TourSchedule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TourSchedule->create();
			if ($this->TourSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The tour schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour schedule could not be saved. Please, try again.'));
			}
		}
		$posts = $this->TourSchedule->Post->find('list');
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
		if (!$this->TourSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid tour schedule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TourSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The tour schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour schedule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TourSchedule.' . $this->TourSchedule->primaryKey => $id));
			$this->request->data = $this->TourSchedule->find('first', $options);
		}
		$posts = $this->TourSchedule->Post->find('list');
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
		$this->TourSchedule->id = $id;
		if (!$this->TourSchedule->exists()) {
			throw new NotFoundException(__('Invalid tour schedule'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TourSchedule->delete()) {
			$this->Session->setFlash(__('The tour schedule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tour schedule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TourSchedule->recursive = 0;
		$this->set('tourSchedules', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TourSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid tour schedule'));
		}
		$options = array('conditions' => array('TourSchedule.' . $this->TourSchedule->primaryKey => $id));
		$this->set('tourSchedule', $this->TourSchedule->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TourSchedule->create();
			if ($this->TourSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The tour schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour schedule could not be saved. Please, try again.'));
			}
		}
		$posts = $this->TourSchedule->Post->find('list');
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
		if (!$this->TourSchedule->exists($id)) {
			throw new NotFoundException(__('Invalid tour schedule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TourSchedule->save($this->request->data)) {
				$this->Session->setFlash(__('The tour schedule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tour schedule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TourSchedule.' . $this->TourSchedule->primaryKey => $id));
			$this->request->data = $this->TourSchedule->find('first', $options);
		}
		$posts = $this->TourSchedule->Post->find('list');
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
		$this->TourSchedule->id = $id;
		if (!$this->TourSchedule->exists()) {
			throw new NotFoundException(__('Invalid tour schedule'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TourSchedule->delete()) {
			$this->Session->setFlash(__('The tour schedule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tour schedule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
