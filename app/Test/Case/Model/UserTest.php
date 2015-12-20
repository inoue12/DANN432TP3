<?php
App::uses('User', 'Model');

/**
 * User Test Case
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user', 'app.subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

/**
 * testIsOwnedBy method
 *
 * @return void
 */
	public function testIsOwnedBy() {
		$this->markTestIncomplete('testIsOwnedBy not implemented.');
	}
	
		public function testValidEmail() {
		// Build the data to save
		$data = array('User' => array(
			'username' => 'James Fairhurst',
			'email' => 'info@jamesfairhurst.co.uk',
			'role' => 'student',
		));

		// Attempt to save
		$result = $this->User->save($data);

		// Test successful insert
		$this->assertArrayHasKey('User', $result);

		// Get the count in the DB
		$result = $this->User->find('count', array(
			'conditions' => array(
				'User.email' => 'info@jamesfairhurst.co.uk',
				'User.username' => 'James Fairhurst',
				'User.role' => 'student',
			),
		));

		// Test DB entry
		$this->assertEqual($result, 1);
	}

}
