<?php
App::uses('AppController', 'Controller');
/**
 * CarTypes Controller
 *
 * @property CarType $CarType
 * @property PaginatorComponent $Paginator
 */
class ContactsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	var $helpers = array('Html', 'Form', 'Captcha');
	public $components = array('Paginator','Captcha'=>array('field'=>'security_code'));
	public function beforeFilter() {
		 $this->title_for_layout = 'Liên hệ';
		parent::beforeFilter();
		$this->Auth->allow('contact','captcha');
	}/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->Paginator->paginate());
	}
	function  captcha()  {
		$this->autoRender = false;
		$this->layout='ajax';
		$this->Captcha->create();
	}
/**
 * admin_add method
 *
 * @return void
 */
	public function contact() {
		if ($this->request->is('post')) {
			$this->Contact->create();
			$this->Contact->setCaptcha('security_code', $this->Captcha->getCode('Contact.security_code'));
			$this->Contact->set($this->request->data);
			if($this->Contact->validates())  {
				if ($this->Contact->save($this->request->data)) {
					$this->Session->setFlash(__('The car type has been saved.'));
					return $this->redirect('/');
				} else {
					$this->Session->setFlash(__('The car type could not be saved. Please, try again.'));
				}
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
	public function admin_view($id = null) {
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Invalid car type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('The car type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
			$this->request->data = $this->Contact->find('first', $options);
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
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid option'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contact->delete()) {
			$this->Session->setFlash(__('The option has been deleted.'));
		} else {
			$this->Session->setFlash(__('The option could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}