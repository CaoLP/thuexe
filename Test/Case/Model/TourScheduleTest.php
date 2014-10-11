<?php
App::uses('TourSchedule', 'Model');

/**
 * TourSchedule Test Case
 *
 */
class TourScheduleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tour_schedule',
		'app.post',
		'app.car_rental_booking',
		'app.postmetum',
		'app.tour_booking'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TourSchedule = ClassRegistry::init('TourSchedule');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TourSchedule);

		parent::tearDown();
	}

}
