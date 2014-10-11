<?php
App::uses('CarRentalBooking', 'Model');

/**
 * CarRentalBooking Test Case
 *
 */
class CarRentalBookingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car_rental_booking',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CarRentalBooking = ClassRegistry::init('CarRentalBooking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CarRentalBooking);

		parent::tearDown();
	}

}
