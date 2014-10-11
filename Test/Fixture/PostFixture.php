<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'created_by' => array('type' => 'biginteger', 'null' => false, 'default' => '0', 'unsigned' => true),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'body' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'excerpt' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'string', 'null' => false, 'default' => '1', 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'parent_id' => array('type' => 'biginteger', 'null' => true, 'default' => '0', 'unsigned' => true),
		'url' => array('type' => 'string', 'null' => false, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'type' => array('type' => 'string', 'null' => false, 'default' => 'post', 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'url' => array('column' => 'url', 'unique' => 1),
			'title' => array('column' => 'title', 'unique' => 1)
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
			'created_by' => '',
			'created' => '2014-10-07 11:36:25',
			'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'title' => 'Lorem ipsum dolor sit amet',
			'excerpt' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 'Lorem ipsum dolor ',
			'updated' => '2014-10-07 11:36:25',
			'parent_id' => '',
			'url' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor '
		),
	);

}
