<?php
App::uses('AppModel','Model');
/**
*
*Genders Model
*
*@var array
*/

class Genders extends AppModel{


public $validate = array(
	'name'=>array(
		'name'=>array(
			'rule' => array('name'),
				'allowEmpty' => false,
				'required' => true
			)
		)

	);



}