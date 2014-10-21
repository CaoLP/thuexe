<?php
App::uses('AppController', 'Controller');
/**
 * TourBookings Controller
 *
 * @property TourBooking $TourBooking
 * @property PaginatorComponent $Paginator
 */
class TourBookingsController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    //http://www.devarticles.in/cakephp/simple-captcha-component-for-cakephp/
    var $helpers = array('Html', 'Form', 'Captcha');
    public $components = array('Paginator','Captcha'=>array('field'=>'security_code'));
	public $title_for_layout = 'Đặt Tour';
    /**
     * index method
     *
     * @return void
     */
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('add','captcha');
    }


	function  captcha()  {
		$this->autoRender = false;
		$this->layout='ajax';
		$this->Captcha->create();
	}
    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->TourBooking->recursive = 0;
        $this->set('tourBookings', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->TourBooking->exists($id)) {
            throw new NotFoundException(__('Invalid tour booking'));
        }
        $options = array('conditions' => array('TourBooking.' . $this->TourBooking->primaryKey => $id));
        $this->set('tourBooking', $this->TourBooking->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if (isset($this->request->query['post_id']) && isset($this->request->query['booking_date'])) {
            $post_id = $this->request->query['post_id'];
            $booking_date = $this->request->query['booking_date'];
            if ($this->request->is('post')) {
				$this->TourBooking->setCaptcha('security_code', $this->Captcha->getCode('TourBooking.security_code'));
				$this->TourBooking->set($this->request->data);
				if($this->TourBooking->validates())  {
					if(isset($this->request->data['P']['accept'])){
						$this->TourBooking->create();
						if ($this->TourBooking->save($this->request->data)) {}
						$this->view = 'complete';
					}else
						$this->view = 'confirm';
				}else    { //or
					$this->Session->setFlash('Dữ liệu nhập đặt tour không đúng', 'default', array('class' =>'cake-error'));
					//validation not passed, do something else
				}
            }
            $tour = $this->TourBooking->Tour->find('first', array(
                'conditions' => array('Tour.id' => $post_id)
            ));
            $this->set(compact('tour', 'booking_date', 'post_id'));

        } else {
            return $this->redirect(array('action' => 'index'));
        }
    }

    public function accept()
    {
        if (isset($this->request->query['post_id']) && isset($this->request->query['booking_date'])) {
            $post_id = $this->request->query['post_id'];
            $booking_date = $this->request->query['booking_date'];
            if ($this->request->is('post')) {
                $this->TourBooking->create();
                if ($this->TourBooking->save($this->request->data)) {
                    $this->Session->setFlash(__('The tour booking has been saved.'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The tour booking could not be saved. Please, try again.'));
                }
            }
            $tour = $this->TourBooking->Tour->find('first', array(
                'conditions' => array('Tour.id' => $post_id)
            ));
            $this->set(compact('tour', 'booking_date', 'post_id'));

        } else {
            return $this->redirect(array('action' => 'index'));
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        if (!$this->TourBooking->exists($id)) {
            throw new NotFoundException(__('Invalid tour booking'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->TourBooking->save($this->request->data)) {
                $this->Session->setFlash(__('The tour booking has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tour booking could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('TourBooking.' . $this->TourBooking->primaryKey => $id));
            $this->request->data = $this->TourBooking->find('first', $options);
        }
        $tourSchedules = $this->TourBooking->TourSchedule->find('list');
        $this->set(compact('tourSchedules'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        $this->TourBooking->id = $id;
        if (!$this->TourBooking->exists()) {
            throw new NotFoundException(__('Invalid tour booking'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->TourBooking->delete()) {
            $this->Session->setFlash(__('The tour booking has been deleted.'));
        } else {
            $this->Session->setFlash(__('The tour booking could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }


    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index()
    {
        $this->TourBooking->recursive = 0;

		$con = array();
		if(isset($this->request->query['date'])&&!empty($this->request->query['date'])){
			$date = $this->request->query['date'];
			$con['conditions']['TourBooking.tour_date'] = $date;
		}
		if(isset($this->request->query['status'])&&!empty($this->request->query['status'])){
			$con['conditions']['TourBooking.status'] = $this->request->query['status'];
		}
		$this->Paginator->settings  = $con;

        $this->set('tourBookings', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null)
    {
        if (!$this->TourBooking->exists($id)) {
            throw new NotFoundException(__('Invalid tour booking'));
        }
        $options = array('conditions' => array('TourBooking.' . $this->TourBooking->primaryKey => $id));
        $this->set('tourBooking', $this->TourBooking->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->TourBooking->create();
            if ($this->TourBooking->save($this->request->data)) {
                $this->Session->setFlash(__('The tour booking has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tour booking could not be saved. Please, try again.'));
            }
        }
        $tourSchedules = $this->TourBooking->TourSchedule->find('list');
        $this->set(compact('tourSchedules'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null)
    {
        if (!$this->TourBooking->exists($id)) {
            throw new NotFoundException(__('Invalid tour booking'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->TourBooking->save($this->request->data)) {
                $this->Session->setFlash(__('The tour booking has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The tour booking could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('TourBooking.' . $this->TourBooking->primaryKey => $id));
            $this->request->data = $this->TourBooking->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null)
    {
        $this->TourBooking->id = $id;
        if (!$this->TourBooking->exists()) {
            throw new NotFoundException(__('Invalid tour booking'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->TourBooking->delete()) {
            $this->Session->setFlash(__('The tour booking has been deleted.'));
        } else {
            $this->Session->setFlash(__('The tour booking could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
