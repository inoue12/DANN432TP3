<?php
App::uses('Student', 'Model');

/**
 * Student Test Case
 */
class StudentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.student',
		'app.group',
		'app.subject',
		'app.program',
		'app.students_group',
		'app.teacher',
		'app.teachers_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Student = ClassRegistry::init('Student');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Student);

		parent::tearDown();
	}

/**
 * testIsOwnedBy method
 *
 * @return void
 */
	public function testIsOwnedBy() {
		$post_id = 1;
		$user_id = 1;
		
		//$this->User->isOwnedBy(1, 1);
		$user = $this->Student->findById($post_id);
		$leRetour = $this->Student->isOwnedBy($post_id, $user['Student']['user_id']);
		$this->assertTrue(true,$leRetour);
	}
	
	public function testIsNotOwnedBy() {
		$post_id = 2;
		$user_id = 1;
		
		//$this->User->isOwnedBy(1, 1);
		$user = $this->Student->findById($post_id);
		$leRetour = $this->Student->isOwnedBy($post_id, $user['Student']['user_id']);
		$this->assertFalse(false,$leRetour);
	}

/**
 * testGetDetailNames method
 *
 * @return void
 */
	
	public function testFormWithValidFile() {
		// Create a stub for the Contact Model class
		$stub = $this->getMockForModel('Student', array('is_uploaded_file','move_uploaded_file'));

		// Always return TRUE for the 'is_uploaded_file' function
		$stub->expects($this->any())
			->method('is_uploaded_file')
			->will($this->returnValue(TRUE));
		// Copy the file instead of 'move_uploaded_file' to allow testing
		$stub->expects($this->any())
			->method('move_uploaded_file')
			->will($this->returnCallback('copy'));

		// Build the data to save along with a sample file
		$data = array('Student' => array(
			'name' => 'Patate',
			'last_name' => 'Sanguine',
			'other_details' => 'dsadsadsa',
			'filename' => array(
				'name' => 'TestFile.jpg',
				'type' => 'image/jpg',
			// modified with windows DS backslash
				//'tmp_name' => 'C:\Users\Nawar\Documents\UniServerZ\www\DANNA432TP1\cakephp-2.7.3\app\Test\Case\Model\TestFile.jpg',
				// original from tutorial
			 'tmp_name' => ROOT.DS.APP_DIR.DS.'Test'.DS.'Case'.DS.'Model'.DS.'TestFile.jpg',
				'error' => 0,
				'size' => 845941,
				),
			'user_id' => 1
		));

		// Attempt to save
		$result = $stub->save($data);

		// Test successful insert
		$this->assertArrayHasKey('Student', $result);

		// Get the count in the DB
		$entryCount = $this->Student->find('count',
                 array(
			'conditions' => array(
			'Student.name' => 'Patate',
			'Student.last_name' => 'Sanguine',
			'Student.other_details' => 'dsadsadsa',
		'filename' => 'uploads/TestFile.jpg'
			)
		));
		// Test DB entry
		$this->assertEqual($entryCount, 1);

		// Test uploaded file exists
		$this->assertFileExists(WWW_ROOT.'uploads'.DS.'TestFile.jpg');
	}
	
	public function testFormWithInvalidFile() {
		// Create a stub for the Contact Model class
		$stub = $this->getMockForModel('Student', array('is_uploaded_file','move_uploaded_file'));

		// Always return TRUE for the 'is_uploaded_file' function
		$stub->expects($this->any())
			->method('is_uploaded_file')
			->will($this->returnValue(TRUE));
		// Copy the file instead of 'move_uploaded_file' to allow testing
		$stub->expects($this->any())
			->method('move_uploaded_file')
			->will($this->returnCallback('copy'));

		// Build the data to save along with a sample file
		$data = array('Student' => array(
			'name' => 'Patate',
			'last_name' => 'Sanguine',
			'other_details' => 'dsadsadsa',
			'filename' => array(
				'name' => 'TestFile.txt',
				'type' => 'text/plain',
			// modified with windows DS backslash
				//'tmp_name' => 'C:\Users\Nawar\Documents\UniServerZ\www\DANNA432TP1\cakephp-2.7.3\app\Test\Case\Model\TestFile.txt',
				// original from tutorial
			 'tmp_name' => ROOT.DS.APP_DIR.DS.'Test'.DS.'Case'.DS.'Model'.DS.'TestFile.txt',
				'error' => 0,
				'size' => 19,
				),
			'user_id' => 1
		));
		
		debug($data);

		// Attempt to save
		$result = $stub->save($data);

		// Test failure
		$this->assertFalse($result);

		// Test uploaded file does not exists
		$this->assertFileNotExists(WWW_ROOT.'uploads'.DS.'TestFile.txt');
	}
	
	public function testFormWithEmptyFile() {
		// Build the data to save along with an empty file
		$data = array('Student' => array(
			'name' => 'Patate',
			'last_name' => 'Sanguine',
			'other_details' => 'dsadsadsa',
			'filename' => array(
				'name' => '',
				'type' => '',
				'tmp_name' => '',
				'error' => 4,
				'size' => 0,
			),
			'user_id' => 1
		));

		// Attempt to save
		$result = $this->Student->save($data);

		// Test successful insert
		$this->assertArrayHasKey('Student', $result);

		// Get the count in the DB
		$result = $this->Student->find('count',array(
			'conditions' => array(
			'Student.name' => 'Patate',
			'Student.last_name' => 'Sanguine',
			'Student.other_details' => 'dsadsadsa',
			),
			'user_id' => 1
		));

		// Test DB entry
		$this->assertEqual($result, 1);
	}
}
