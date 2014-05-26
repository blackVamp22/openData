<?php
App::uses('AppController','Controller');
/**
*Controller of Genders
*/

class GendersController extends Controller{



	/**
* returns all genders
* @return array
*/	
    public function get_genders(){
    	return $this->Genders->find('all', array( 
										'fields' => array(
											'AgeRanges.id',
											'AgeRanges.name'
										)
									) );
    }




}
