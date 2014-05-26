<?php
App::uses('AppController','Controller');
/**
*Controller of Migrations
*/

class MigrationsController extends Controller{



	/**
* returns all migrations
* @return array
*/	
    public function get_migrations(){
    	return $this->Migrations->find('all', array( 
										'fields' => array(
											'Migrations.id',
											'Migrations.percentage_male',
											'Migrations.percentage_female',
											'Migrations.year',
											'Migrations.district_id'
										)
									) );
    }




}
