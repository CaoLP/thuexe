<?php
App::uses('AppModel', 'Model');
/**
 * Postmetum Model
 *
 * @property Post $Post
 */
class Postmetum extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
    public function beforeSave() {
        if(isset($this->data[$this->alias]['meta_value'] ))
            $this->data[$this->alias]['meta_value'] = json_encode($this->data[$this->alias]['meta_value'] );
        return true;
    }
}
