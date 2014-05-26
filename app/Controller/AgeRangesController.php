<?php
App::uses('AppController','Controller');
/**
*Controller of Age Ranges
*/

class AgeRangesController extends Controller{



	/**
* returns all age ranges
* @return array
*/	
    public function get_age_range(){
    	return $this->AgeRanges->find('all', array( 
										'fields' => array(
											'AgeRanges.id',
											'AgeRanges.name'
										)
									) );
    }




}
