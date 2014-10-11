<?php
App::uses('AppController', 'Controller');
/**
 * Postmeta Controller
 *
 * @property Postmetum $Postmetum
 * @property PaginatorComponent $Paginator
 */
class PostmetaController extends AppController {

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
		$this->Postmetum->recursive = 0;
		$this->set('postmeta', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Postmetum->exists($id)) {
			throw new NotFoundException(__('Invalid postmetum'));
		}
		$options = array('conditions' => array('Postmetum.' . $this->Postmetum->primaryKey => $id));
		$this->set('postmetum', $this->Postmetum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Postmetum->create();
			if ($this->Postmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The postmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postmetum could not be saved. Please, try again.'));
			}
		}
		$posts = $this->Postmetum->Post->find('list');
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
		if (!$this->Postmetum->exists($id)) {
			throw new NotFoundException(__('Invalid postmetum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Postmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The postmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postmetum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Postmetum.' . $this->Postmetum->primaryKey => $id));
			$this->request->data = $this->Postmetum->find('first', $options);
		}
		$posts = $this->Postmetum->Post->find('list');
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
		$this->Postmetum->id = $id;
		if (!$this->Postmetum->exists()) {
			throw new NotFoundException(__('Invalid postmetum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Postmetum->delete()) {
			$this->Session->setFlash(__('The postmetum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The postmetum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Postmetum->recursive = 0;
		$this->set('postmeta', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Postmetum->exists($id)) {
			throw new NotFoundException(__('Invalid postmetum'));
		}
		$options = array('conditions' => array('Postmetum.' . $this->Postmetum->primaryKey => $id));
		$this->set('postmetum', $this->Postmetum->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Postmetum->create();
			if ($this->Postmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The postmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postmetum could not be saved. Please, try again.'));
			}
		}
		$posts = $this->Postmetum->Post->find('list');
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
		if (!$this->Postmetum->exists($id)) {
			throw new NotFoundException(__('Invalid postmetum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Postmetum->save($this->request->data)) {
				$this->Session->setFlash(__('The postmetum has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postmetum could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Postmetum.' . $this->Postmetum->primaryKey => $id));
			$this->request->data = $this->Postmetum->find('first', $options);
		}
		$posts = $this->Postmetum->Post->find('list');
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
		$this->Postmetum->id = $id;
		if (!$this->Postmetum->exists()) {
			throw new NotFoundException(__('Invalid postmetum'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Postmetum->delete()) {
			$this->Session->setFlash(__('The postmetum has been deleted.'));
		} else {
			$this->Session->setFlash(__('The postmetum could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
