<?php
App::uses('TourBooking', 'Model');

/**
 * TourBooking Test Case
 *
 */
class TourBookingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tour_booking',
		'app.tour_schedule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TourBooking = ClassRegistry::init('TourBooking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TourBooking);

		parent::tearDown();
	}

}
