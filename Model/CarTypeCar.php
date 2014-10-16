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
		'price' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
}
