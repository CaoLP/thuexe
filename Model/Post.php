<?php
App::uses ('AppModel', 'Model');
/**
 * Post Model
 *
 * @property Post             $ParentPost
 * @property CarRentalBooking $CarRentalBooking
 * @property Postmetum        $Postmetum
 * @property Post             $ChildPost
 * @property TourSchedule     $TourSchedule
 */
class Post extends AppModel {

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array (
		'body' => array (
			'notEmpty' => array (
				'rule' => array ('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'title' => array (
			'notEmpty' => array (
				'rule' => array ('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array (
				'rule' => array ('isUniqueTitle'),
				'message' => 'This title is already in use',
			),
		),
		'excerpt' => array (
			'notEmpty' => array (
				'rule' => array ('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array (
			'notEmpty' => array (
				'rule' => array ('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'url' => array (
			'notEmpty' => array (
				'rule' => array ('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array (
				'rule' => array ('isUniqueUrl'),
				'message' => 'This url is already in use',
			),
		),
		'type' => array (
			'notEmpty' => array (
				'rule' => array ('notEmpty'),
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
	public $belongsTo = array (
		'ParentPost' => array (
			'className' => 'Post',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Creater' => array (
			'className' => 'User',
			'foreignKey' => 'created_by',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	/**
	 * hasMany associations
	 *
	 * @var array
	 */
	public $hasMany = array (
		'CarRentalBooking' => array (
			'className' => 'CarRentalBooking',
			'foreignKey' => 'post_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Postmetum' => array (
			'className' => 'Postmetum',
			'foreignKey' => 'post_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ChildPost' => array (
			'className' => 'Post',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TourSchedule' => array (
			'className' => 'TourSchedule',
			'foreignKey' => 'post_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	public $hasOne = 'Seo';

	function isUniqueTitle ($check) {

		$post = $this->find (
			'first',
			array (
				  'fields' => array (
					  'Post.id',
					  'Post.title'
				  ),
				  'conditions' => array (
					  'Post.title' => $check['title']
				  )
			)
		);

		if (!empty($post)) {
			if (isset($this->data[$this->alias]['id']))
				if ($this->data[$this->alias]['id'] == $post['Post']['id']) {
					return true;
				} else {
					return false;
				}
		} else {
			return true;
		}
	}

	function isUniqueUrl ($check) {

		$post = $this->find (
			'first',
			array (
				  'fields' => array (
					  'Post.id',
					  'Post.url'
				  ),
				  'conditions' => array (
					  'Post.url' => $check['url']
				  )
			)
		);

		if (!empty($post)) {
			if (isset($this->data[$this->alias]['id']))
				if ($this->data[$this->alias]['id'] == $post['Post']['id']) {
					return true;
				} else {
					return false;
				}
		} else {
			return true;
		}
	}

	public function checkDraftPost () {
		$data = $this->find ('first', array (
											'fields' => array ('Post.id'),
											'conditions' => array (
												'Post.status' => 0
											)
									  )
		);
		if (isset($data['Post']['id']))
			return $data['Post']['id'];
	}

	public function getTopCar () {
		$condition = array (
			'conditions' => array (
				'Post.type' => 'car_rental',
				'Post.status' => 1
			),
			'limit' => 12
		);

		return $this->find ('all', $condition);
	}

	public function getTopDaily () {
		$condition = array (
			'conditions' => array (
				'Post.type' => 'daily_tour',
				'Post.status' => 1
			),
			'limit' => 6
		);

		return $this->find ('all', $condition);
	}

	public function getTopWeekly () {
		$condition = array (
			'conditions' => array (
				'Post.type' => 'weekly_tour',
				'Post.status' => 1
			),
			'limit' => 6
		);

		return $this->find ('all', $condition);
	}

	public function getFeatures () {
		$this->virtualFields['totalBooking'] = 'COUNT(TourBooking.id)';
		$condition = array (
			'conditions' => array (
				'Post.type' => array('daily_tour','weekly_tour'),
				'Post.status' => 1,
			),
			'limit' => 4,
			'joins' => array (
				array (
					'table' => 'tour_bookings',
					'alias' => 'TourBooking',
					'type' => 'LEFT',
					'conditions' => array (
						'TourBooking.tour_schedule_id = Post.id',
						'TourBooking.tour_date > ' => date('Y-m-d'),
					),
				)
			),
			 'group' => 'Post.id',
            'order' => array('Post__totalBooking' => 'DESC'),
		);

		return $this->find ('all', $condition);
	}

	public function findPostBySlug ($url, $type) {
		$condition = array (
			'conditions' => array (
				'Post.type' => $type,
				'Post.url' => $url,
				'Post.status' => 1
			)
		);

		return $this->find ('first', $condition);
	}

	public function findTomorrow () {
		$days_en = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'Everyday');
		$day = date ('N', strtotime ('1 days')) - 1;
		$result = $this->find ('all', array (
											'conditions' => array (
												'Post.type' => 'weekly_tour',
												'Postmetum.meta_key' => 'start_date',
												'Postmetum.meta_value LIKE' => '%"' . $day . '"%',
											),
											'limit' => 5,
											'joins' => array (
												array (
													'table' => 'postmeta',
													'alias' => 'Postmetum',
													'type' => 'INNER',
													'conditions' => array (
														'Postmetum.post_id = Post.id'
													)
												)
											)
									  ));
		$result = Set::combine ($result, '{n}.Post.id', '{n}');
		if (count ($result) < 5) {
			$next = 5 - count ($result);
			$result2 = $this->find ('all', array (
												 'conditions' => array (
													 'Post.type' => 'daily_tour',
												 ),
												 'limit' => $next
										   ));
			$result2 = Set::combine ($result2, '{n}.Post.id', '{n}');
			$result = array_merge ($result, $result2);
		}

		return $result;
	}
}
