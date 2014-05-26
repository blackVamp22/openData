<?php
App::uses('AppController','Controller');
/**
*Controller of Age Ranges
*/

class HousingBenefitsController extends Controller{



	/**
* returns all housing benefits
* @return array
*/	
    public function get_housing_benefits(){
    	return $this->HousingBenefits->find('all', array( 
										'fields' => array(
											'HousingBenefits.id',
											'HousingBenefits.percentage',
											'HousingBenefits.district_id',
											'HousingBenefits.year'

										)
									) );
    }




}
