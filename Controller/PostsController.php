<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController
{

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
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }
    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $this->Post->recursive = 0;
        $this->set('posts', $this->Paginator->paginate());
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
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('post', $this->Post->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
            }
        }
        $parentPosts = $this->Post->ParentPost->find('list');
        $this->set(compact('parentPosts'));
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
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
            $this->request->data = $this->Post->find('first', $options);
        }
        $parentPosts = $this->Post->ParentPost->find('list');
        $this->set(compact('parentPosts'));
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
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Post->delete()) {
            $this->Session->setFlash(__('The post has been deleted.'));
        } else {
            $this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }


    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index($type = null)
    {
        $this->Post->recursive = 0;
        if ($type != null) {
            $this->Paginator->settings = array(
                'conditions' => array(
                    'Post.type' => $type,
                    'Post.status' => 1
                )
            );
//            $type = '/'.$type;
        }
        $this->set(compact('type'));
        $this->set('posts', $this->Paginator->paginate());
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
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('post', $this->Post->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add($type = null)
    {
        if ($type != null) {
            $data = $this->Post->checkDraftPost();
            if($data ==null){
            $this->Post->create();
            $templateData = array(
                'Post' => array(
                    'status' => '0'
                )
            );
            $this->Post->save($templateData, false);
            $id = $this->Post->id;
            }else{
                $id = $data;
                $templateData = array(
                    'Post' => array(
                        'id' =>$id,
                        'body'=>'',
                        'title'=>'',
                        'excerpt'=>'',
                        'url'=>'',
                        'parent_id'=>0,
                        'type'=>'post',
                        'status' => '0'
                    )
                );
                $this->Post->save($templateData, false);
            }
            return $this->redirect(array('action' => 'edit', $id, $type));
        } else {
            if ($this->request->is('post')) {
                $this->Post->create();
                if ($this->Post->save($this->request->data)) {
                    $this->Session->setFlash(__('The post has been saved.'));
                    return $this->redirect(array('action' => 'index', $type));
                } else {
                    $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
                }
            }
            if ($type != null)
                $this->view = $type;

            $parentPosts = $this->Post->ParentPost->find('list');
            $this->set(compact('parentPosts', 'type'));
        }
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null, $type = null)
    {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Post->save($this->request->data)) {
                $this->Post->Postmetum->saveMany($this->request->data['Postmetum']);
                $this->Session->setFlash(__('The post has been saved.'));
                return $this->redirect(array('action' => 'index', $type));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
            $this->request->data = $this->Post->find('first', $options);
        }
        if ($type != null)
            $this->view = $type;

        switch ($type) {
            case 'car_rental':
                $this->title_for_layout = 'Xe cho thuê';
                break;
            case 'daily_tour':
                $this->title_for_layout = 'Tour hằng ngày';
                break;
            case 'weekly_tour':
                $this->title_for_layout = 'Tour hằng tuần';
                break;
            case 'rental_option':
                $this->title_for_layout = 'Chặn xe';
                break;
            default:
                $this->title_for_layout = 'Post';
                break;
        }
        $this->setTitleForLayout();
        $parentPosts = $this->Post->ParentPost->find('list');
        if ($this->request->data['Postmetum']) {
            $arrayFields = Set::combine($this->request->data['Postmetum'], '{n}.meta_key', '{n}.id');
            $this->request->data['Postmetum'] = Set::combine($this->request->data['Postmetum'], '{n}.id', '{n}');
            $this->set(compact('arrayFields'));
        }
        $this->set(compact('parentPosts', 'type'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null, $type = null)
    {
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Post->delete()) {
            $this->Session->setFlash(__('The post has been deleted.'));
        } else {
            $this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index', $type));
    }
}
