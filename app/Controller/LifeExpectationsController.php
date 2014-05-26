<?php
App::uses('AppController','Controller');
/**
*Controller of Life Expectations
*/

class LifeExpectationsController extends Controller{



	/**
* returns all life expectations data
* @return array
*/	
    public function get_life_expectations(){
    	return $this->LifeExpectations->find('all', array( 
										'fields' => array(
											'LifeExpectations.id',
											'LifeExpectations.gender_id',
											'LifeExpectations.year',
											'LifeExpectations.district_id'
										)
									) );
    }




}
