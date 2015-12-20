<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 * @property Group $Group
 */
class Student extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'other_details' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'filename' => array(
			// http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the file upload',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			// http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif','image/png','image/jpg','image/jpeg')),
				'message' => 'Invalid file, only images allowed',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			// custom callback to deal with the file upload
			'processUpload' => array(
				'rule' => 'processUpload',
				'message' => 'Something went wrong processing your file',
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'last' => TRUE,
			)
			),
			
		'thumb_file' => array(
			'fileExtension' => array(
				'rule' => array('fileExtension', array('jpg','png','gif')),
				'message' => 'The extension of the file should be jpg, png or gif'
			),
			'image' => array(
				'rule' => array('fileSize', '<=', '1MB'),
				'message' => 'Image must be less than 1MB'
			)
		),
	);

	public $actsAs = array(
		'Upload.Upload' => array(
			'fields' => array(
				'thumb' => 'img/subjects/:id'
			)
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Group' => array(
			'className' => 'Group',
			'joinTable' => 'students_groups',
			'foreignKey' => 'student_id',
			'associationForeignKey' => 'group_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
	
		public $uploadDir = 'uploads';

	/**
	 * Before Validation Callback
	 * @param array $options
	 * @return boolean
	 */
	public function beforeValidate($options = array()) {
		// ignore empty file - causes issues with form validation when file is empty and optional
		if (!empty($this->data[$this->alias]['filename']['error']) && $this->data[$this->alias]['filename']['error']==4 && $this->data[$this->alias]['filename']['size']==0) {
			unset($this->data[$this->alias]['filename']);
		}

		return parent::beforeValidate($options);
	}

	/**
	 * Before Save Callback
	 * @param array $options
	 * @return boolean
	 */
	public function beforeSave($options = array()) {
		// a file has been uploaded so grab the filepath
		if (!empty($this->data[$this->alias]['filepath'])) {
			$this->data[$this->alias]['filename'] = $this->data[$this->alias]['filepath'];
		}
		
		return parent::beforeSave($options);
	}
	
public function isOwnedBy($post, $user) {
    return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
}

 public function getDetailNames ($term = null) {
      if(!empty($term)) {
        $details = $this->find('list', array(
          'conditions' => array(
            'name LIKE' => trim($term) . '%'
          )
        ));
        return $details;
      }
      return false;
    }

	
		public function processUpload($check=array()) {
		// deal with uploaded file
		if (!empty($check['filename']['tmp_name'])) {

			// check file is uploaded
			if (!$this->is_uploaded_file($check['filename']['tmp_name'])) {
				return FALSE;
			}

			// build full filename
			$filename = WWW_ROOT . $this->uploadDir . DS . Inflector::slug(pathinfo($check['filename']['name'], PATHINFO_FILENAME)).'.'.pathinfo($check['filename']['name'], PATHINFO_EXTENSION);

			// @todo check for duplicate filename

			// try moving file
			if (!$this->move_uploaded_file($check['filename']['tmp_name'], $filename)) {
				return FALSE;

			// file successfully uploaded
			} else {
				// save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
				$this->data[$this->alias]['filepath'] = str_replace(DS, "/", str_replace(WWW_ROOT, "", $filename) );
			}
		}
        //debug($check);
        //die();
		return TRUE;
	}

	/**
	 * Wrapper method for 'is_uploaded_file' to allow testing
	 * @param string $tmp_name
	 */
	public function is_uploaded_file($tmp_name) {
		return is_uploaded_file($tmp_name);
	}

	/**
	 * Wrapper method for 'move_uploaded_file' to allow testing
	 * @param string $from
	 * @param string $to
	 */
	public function move_uploaded_file($from, $to) {
		return move_uploaded_file($from, $to);
	}
	
	
}
