<?php
App::uses('CarTypeCar', 'Model');

/**
 * CarTypeCar Test Case
 *
 */
class CarTypeCarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car_type_car',
		'app.post',
		'app.user',
		'app.car_rental_booking',
		'app.postmetum',
		'app.tour_schedule',
		'app.tour_booking',
		'app.car_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CarTypeCar = ClassRegistry::init('CarTypeCar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CarTypeCar);

		parent::tearDown();
	}

}
