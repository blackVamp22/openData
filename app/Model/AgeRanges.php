<?php
App::uses('AppModel','Model');
/**
*
*Age Ranges Model
*@var array
*/
class AgeRanges extends AppModel{

public $validation= array(
	'name'=>array(
		'name'=>array(
			'rule' => array('name'),
				'allowEmpty' => false,
				'required' => true
			)
		)
	);






}