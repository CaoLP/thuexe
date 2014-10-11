<?php
/**
 * TourScheduleFixture
 *
 */
class TourScheduleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'post_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'start_date' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'duration_days' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'price' => array('type' => 'decimal', 'null' => false, 'default' => '0.00', 'length' => '16,2', 'unsigned' => false),
		'price_child' => array('type' => 'decimal', 'null' => false, 'default' => '0', 'length' => 16, 'unsigned' => false),
		'max_people' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'created' => array('type' => 'timestamp', 'null' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'post_id' => '',
			'start_date' => '2014-10-07 11:36:26',
			'duration_days' => 1,
			'price' => '',
			'price_child' => '',
			'max_people' => 1,
			'created' => 1412674586
		),
	);

}
