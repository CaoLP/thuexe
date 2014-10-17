<?php
App::uses('AppModel', 'Model');
/**
 * CarTypeCar Model
 *
 * @property Post $Post
 * @property CarType $CarType
 */
class CarTypeCar extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(

	);

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
		),
		'CarType' => array(
			'className' => 'CarType',
			'foreignKey' => 'car_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public function beforeSave($option=array()){
        if(isset($this->data[$this->alias]['price'])){
            if(empty($this->data[$this->alias]['price'])){
                $this->data[$this->alias]['price'] = 0;
            }
        }
        parent::beforeSave($option);
    }
}
