<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 */
class Member extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Please enter email',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'isUnique' => array(
                            'rule' => 'isUnique',
                            'message' => 'This Email address already belongs to an account'
            )
		),
		'first_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter First Name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'last_name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter last name',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'matrikel' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Please enter MatrikelNr',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
	);

/**
 * saving timestamp in table on update and create
 * md5 hashing the password before saving
 *
 */
	public function beforeSave($options = array()) 
    {
    	//INSERT
    	if(empty($this->data[$this->alias]['id'])){
			$this->data['Account']['created'] = time();         
		}
        return true;
    }

/**
 * formatting the timstamp as an array for search results
 *
 */
    public function afterFind($results, $primary = false) {
        foreach ($results as $key => $val) {
            if(!empty( $results[$key]['Account']['created'] )){
                $results[$key]['Account']['created_ts'] = $val['Account']['created'];
                $results[$key]['Account']['created'] = $this->dateFormatAfterFind($val['Account']['created']);    
            }           
        }
        return $results;
    }

/**
 * converts timestamp to array
 */
    public function dateFormatAfterFind($timestamp) {
        $date = array( 'year' => '', 'month' => '', 'day' => '' );
        if( !empty($timestamp) ){
            $date['year'] = date('Y', $timestamp);
            $date['month'] = date('m', $timestamp);
            $date['day'] = date('d', $timestamp);
        }
        return $date;
    }

}
