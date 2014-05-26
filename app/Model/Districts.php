<?php
App::uses('AppModel','Model');
/**
*Districts Model
*@var array
*/  
class Districts extends AppModel{
	
/**
* Information about the different
* districts
*/

public $validate = array(
	'name' => array(
			'name' => array(
				'rule' => array('name'),
				'allowEmpty' => false,
				'required' => true
				)
            )
		)
		);


}
