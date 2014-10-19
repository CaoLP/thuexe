<?php
App::uses('AppController', 'Controller');
/**
 * Options Controller
 *
 * @property Option $Option
 * @property PaginatorComponent $Paginator
 */
class OptionsController extends AppController {

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
	public function admin_index($group=null) {
		$this->Option->recursive = 0;
        if($group!=null)
        $this->Paginator->settings = array(
            'conditions'=>array(
                'Option.group' => $group
            )
        );
        $this->set(compact('group'));
		$this->set('options', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Option->exists($id)) {
			throw new NotFoundException(__('Invalid option'));
		}
		$options = array('conditions' => array('Option.' . $this->Option->primaryKey => $id));
		$this->set('option', $this->Option->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($group=null) {
        if(in_array($group,array('ads','slide','promote'))) $this->view = 'ads_slides';
        $this->set(compact('group'));
		if ($this->request->is('post')) {
			if(in_array($group,array('ads','slide','promote'))){
				$this->request->data['Option']['name'] = strtotime(date('Y-m-d h:m:s'));
				$this->request->data['Option']['key'] = $group . $this->request->data['Option']['name'];
				if(empty($this->request->data['Post']['link'])) $this->request->data['Post']['link'] = 'javascript:;';
				$this->request->data['Option']['value'] = json_encode($this->request->data['Post']);
			}
			$this->Option->create();
			if ($this->Option->save($this->request->data)) {
				$this->Session->setFlash(__('The option has been saved.'));
                $this->Option->writeConfigure();
				return $this->redirect(array('action' => 'index',$group));
			} else {
				$this->Session->setFlash(__('The option could not be saved. Please, try again.'));
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
	public function admin_edit($id = null,$group=null) {
		if (!$this->Option->exists($id)) {
			throw new NotFoundException(__('Invalid option'));
		}
		if(in_array($group,array('ads','slide','promote'))) $this->view = 'ads_slides';
		$this->set(compact('group'));
		if ($this->request->is(array('post', 'put'))) {
			if(in_array($group,array('ads','slide','promote'))){
				$this->request->data['Option']['name'] = strtotime(date('Y-m-d h:m:s'));
				$this->request->data['Option']['key'] = $group . $this->request->data['Option']['name'];
				if(empty($this->request->data['Post']['link'])) $this->request->data['Post']['link'] = 'javascript:;';
				$this->request->data['Option']['value'] = json_encode($this->request->data['Post']);
			}
			if ($this->Option->save($this->request->data)) {
				$this->Session->setFlash(__('The option has been saved.'));
				return $this->redirect(array('action' => 'index',$group));
			} else {
				$this->Session->setFlash(__('The option could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Option.' . $this->Option->primaryKey => $id));
			$this->request->data = $this->Option->find('first', $options);
			if(in_array($group,array('ads','slide','promote'))){
				$this->request->data['Post'] = json_decode($this->request->data['Option']['value'],true);
			}
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null,$group=null) {
		$this->Option->id = $id;
		if (!$this->Option->exists()) {
			throw new NotFoundException(__('Invalid option'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Option->delete()) {
			$this->Session->setFlash(__('The option has been deleted.'));
		} else {
			$this->Session->setFlash(__('The option could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index',$group));
	}
}
