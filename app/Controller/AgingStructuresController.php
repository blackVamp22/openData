<?php
App::uses('AppController','Controller');
/**
*Controller of Aging Structures
*/

class AgingStructuresController extends Controller{



	/**
* returns all aging structures
* @return array
*/	
    public function get_aging_structures(){
    	return $this->AgingStructures->find('all', array( 
										'fields' => array(
											'AgingStructures.id',
											'AgingStructures.percentage_female',
											'AgingStructures.age_range_id',
											'AgingStructures.district_id',
											'AgingStructures.year'
										)
									) );
    }




}
