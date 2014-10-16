<?php
App::uses('CarType', 'Model');

/**
 * CarType Test Case
 *
 */
class CarTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car_type',
		'app.car_type_car'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CarType = ClassRegistry::init('CarType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CarType);

		parent::tearDown();
	}

}
