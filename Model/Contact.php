<?php
App::uses('AppModel', 'Model');
/**
 * CarType Model
 *
 * @property CarTypeCar $CarTypeCar
 */
class Contact extends AppModel {

	public $actsAs = array(
		'Captcha' => array(
			'field' => array('security_code'),
			'error' => 'Mã bảo mật không đúng'
		)
	);
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email' =>  array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),'email'
		),

		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),

		'body' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

}
