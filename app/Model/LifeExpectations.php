<?php
App::uses('AppModel','Model');
/**
*
*Life expectatios model
*@var array
*/
class LifeExpectations extends AppModel{

	public $validation= array(
		'value'=>array(
			'value'=>array(
				'rule'=>array('value'),
				//'required'=>true,
				'allowEmpty'=>false,
				'on'=> null,

				)
			),
		 'gender_id' => array(
            //'notEmpty' => array(
              //  'rule' => array('notEmpty'),
                //'message' => '',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
		  'year' => array(
            //'notEmpty' => array(
              //  'rule' => array('notEmpty'),
                //'message' => '',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),

		  	 'district_id' => array(
            //'notEmpty' => array(
              //  'rule' => array('notEmpty'),
                //'message' => '',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),

        )



		);

 public $hasOne = array(
        'District' => array(
            'className' => 'Districts',
            //'conditions' => array('Profile.published' => '1'),
            'dependent' => true
        )
    );



}