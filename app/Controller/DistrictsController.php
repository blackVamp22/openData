<?php
App::uses('AppController','Controller');
/**
*Controller of Districts
*/

class DistrictsController extends Controller{



	/**
* returns all districts
* @return array
*/	
    public function get_districts(){
    	return $this->Districts->find('all', array( 
										'fields' => array(
											'AgeRanges.id',
											'AgeRanges.name'
										)
									) );
    }




}
