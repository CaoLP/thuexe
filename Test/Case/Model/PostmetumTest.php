<?php
App::uses('Postmetum', 'Model');

/**
 * Postmetum Test Case
 *
 */
class PostmetumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.postmetum',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Postmetum = ClassRegistry::init('Postmetum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Postmetum);

		parent::tearDown();
	}

}
