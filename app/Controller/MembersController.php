<?php
App::uses('AppController', 'Controller');
class MembersController extends AppController {

	public $uses = array( 'Member' );

 	public function index( $id = null )
	{
		$member = null;
		if( !$id ){
			$member = $this->get_all_member();
		}else{
			$member = array( $this->get_member($id) );
		}
		$this->set( 'all_member', $member );
	}

/**
* returns all members
* @return array
*/
	public function get_all_member()
	{		
		return $this->Member->find('all', array( 
										'fields' => array(
											'Member.id',
											'Member.first_name',
											'Member.last_name',
											'Member.email',
										)
									) );
	}

/**
* returns member for id
* @return array
*/
	public function get_member( $id )
	{		
		return $this->Member->find('first', array( 
										'conditions' => array(
											'Member.id' => $id											
										)
									) );
	}

}


